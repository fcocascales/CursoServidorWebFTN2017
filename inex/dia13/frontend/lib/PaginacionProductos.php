<?php
/*
  Ejemplo de uso:

  // Crear el objeto
  require_once "lib/PaginacionProductos.php";
  $productos = new PaginacionProductos();

  // Configurar el objeto
  $productos->setPagina($pagina);
  $productos->setPorPagina(6);
  $productos->setIdCategoria($idCategoria);
  $productos->setRangoPrecio($rangoPrecio);
  $productos->setIdProveedor($idProveedor);
  $productos->setOrdenacion($ordenacion);

  // Obtener el resultado
  $tabla = $productos->getTabla();
  $totalPags = $productos->getTotalPaginas();
*/

require_once "conexion.php";

class PaginacionProductos {

  // Paginación
  private $pagina = 1;
  private $porPagina = 10;

  // Filtros
  private $idCategoria = 0;  // 0 = Todas las categorías
  private $rangoPrecio = ""; // "" = Todos los precios
  private $idProveedor = 0;  // 0 = Todos los proveedores
  private $busqueda = ""; // "" = Todos los productos

  // Ordenación
  private $ordenacion = "";  // "" = Orden predeterminado

  public function setPagina($num) {
    $this->pagina = intval($num);
  }
  public function setPorPagina($num) {
    $this->porPagina = intval($num);
  }
  public function setIdCategoria($id) {
    $this->idCategoria = intval($id);
  }
  public function setRangoPrecio($rango) {
    $this->rangoPrecio = $rango;
  }
  public function setIdProveedor($id) {
    $this->idProveedor = intval($id);
  }
  public function setBusqueda($texto) {
    $this->busqueda = $texto;
  }
  public function setOrdenacion($valor) {
    $this->ordenacion = $valor;
  }

  public function getTabla() {
    $offset = ($this->pagina - 1)*$this->porPagina;
    $sql = "SELECT SQL_CALC_FOUND_ROWS
        p.id,
        p.producto,
        p.precio_unidad AS precio,
        p.cantidad_por_unidad AS cantidad,
        r.empresa AS proveedor,
        c.categoria
      FROM productos p
        LEFT JOIN proveedores r ON p.proveedor_id = r.id
        LEFT JOIN categorias c ON p.categoria_id = c.id
      WHERE p.activado IS TRUE
        AND ? IN (0, p.categoria_id)
        AND ? IN (0, p.proveedor_id)
        AND CONCAT_WS(' ', p.producto, r.empresa) LIKE ? ".
        $this->betweenPrecio().
        $this->orderBy().
      " LIMIT $offset, $this->porPagina";
    ////echo "<p>SQL = $sql</p>";
    ////echo "<p>idCategoria = $this->idCategoria</p>";
    ////echo "<p>idProveedor = $this->idProveedor</p>";
    return Conexion::queryTable($sql,
      $this->idCategoria,
      $this->idProveedor,
      $this->busquedaLike()
    );
  }

  public function getTablaBackend() {
    $offset = ($this->pagina - 1)*$this->porPagina;
    $sql = "SELECT SQL_CALC_FOUND_ROWS
        p.id, p.producto, p.precio_unidad AS precio,
        r.empresa AS proveedor, c.categoria,
        p.destacado AS dest, p.activado AS act
      FROM productos p
        LEFT JOIN proveedores r ON p.proveedor_id = r.id
        LEFT JOIN categorias c ON p.categoria_id = c.id
      WHERE CONCAT_WS(' ', p.producto, r.empresa) LIKE ? ".
      " ORDER BY p.id DESC
       LIMIT $offset, $this->porPagina";
    return Conexion::queryTable($sql, $this->busquedaLike());
  }

  public function getTotalPaginas() {
    $sql = "SELECT CEIL(FOUND_ROWS()/$this->porPagina)";
    return Conexion::queryValue($sql);
  }

  private function busquedaLike() {
    $texto = $this->busqueda;
    $texto = str_replace(" ", "%", $texto);
    return "%$texto%";
  }

  private function betweenPrecio() {
    switch ($this->rangoPrecio) {
      case '0_10': return " AND p.precio_unidad BETWEEN 0 AND 10 ";
      case '10_50': return " AND p.precio_unidad BETWEEN 10 AND 50 ";
      case '50_': return " AND p.precio_unidad >= 50 ";
      default: return "";
    }
  }
  private function orderBy() {
    switch ($this->ordenacion) {
      case 'precio_asc': return " ORDER BY p.precio_unidad ";
      case 'precio_desc': return " ORDER BY p.precio_unidad DESC ";
      case 'nombre_asc': return " ORDER BY p.producto ";
      default: return " ORDER BY p.id DESC ";
    }
  }

  //---------------------------------------------
  // HELPERS

  public static function obtenerParametroPagina() {
    if (isset($_GET['pagina'])) return intval($_GET['pagina']);
    else return 1;
  }
  public static function obtenerParametroIdCategoria() {
    if (isset($_GET['id'])) return intval($_GET['id']);
    elseif (isset($_SESSION['idCategoria'])) return $_SESSION['idCategoria'];
    else return 0;
  }
  public static function obtenerParametroRangoPrecio() {
    if (isset($_GET['precio'])) return strip_tags($_GET['precio']);
    elseif (isset($_SESSION['rangoPrecio'])) return $_SESSION['rangoPrecio'];
    else return "rango0";
  }
  public static function obtenerParametroIdProveedor() {
    if (isset($_GET['proveedor'])) return intval($_GET['proveedor']);
    elseif (isset($_SESSION['idProveedor'])) return $_SESSION['idProveedor'];
    else return 0;
  }
  public static function obtenerParametroOrdenacion() {
    if (isset($_GET['ordenar'])) return strip_tags($_GET['ordenar']);
    elseif (isset($_SESSION['ordenacion'])) return $_SESSION['ordenacion'];
    else return "nombre_asc";
  }
  public static function obtenerParametroBusqueda() {
    if (isset($_GET['busqueda'])) return strip_tags($_GET['busqueda']);
    elseif (isset($_SESSION['busqueda'])) return $_SESSION['busqueda'];
    else return "";
  }
  public static function imprimirPaginacion ($pagina, $totalPags) {
    if ($totalPags == 0) return;
    echo '<ul id="paginacion">';
    foreach (range(1, $totalPags) as $pag) {
      if ($pag == $pagina) echo '<li><strong>'.$pag.'</strong></li>';
      else echo '<li><a href="?pagina='.$pag.'">'.$pag.'</a></li>';
    }
    echo '</ul>';
  }

}
