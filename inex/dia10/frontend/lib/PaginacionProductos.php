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
      WHERE ? IN (0, p.categoria_id)
        AND ? IN (0, p.proveedor_id) ".
        $this->betweenPrecio().
        $this->orderBy().
      " LIMIT $offset, $this->porPagina";
    ////echo "<p>SQL = $sql</p>";
    ////echo "<p>idCategoria = $this->idCategoria</p>";
    ////echo "<p>idProveedor = $this->idProveedor</p>";
    return Conexion::queryTable($sql, $this->idCategoria, $this->idProveedor);
  }

  public function getTotalPaginas() {
    $sql = "SELECT CEIL(FOUND_ROWS()/$this->porPagina)";
    return Conexion::queryValue($sql);
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

}
