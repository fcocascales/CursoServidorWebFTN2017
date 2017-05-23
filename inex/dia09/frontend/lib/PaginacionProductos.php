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

  private $pagina = 1;
  private $porPagina = 10;
  private $idCategoria = 0;  // 0 = Todas las categorías
  private $rangoPrecio = ""; // "" = Todos los precios
  private $idProveedor = 0;  // 0 = Todos los proveedores
  private $ordenacion = "";  // "" = Sin ordenar

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
    $sql = "SELECT SQL_CALC_FOUND_ROWS
        id, producto, precio_unidad
      FROM productos
      WHERE ? IN (0, categoria_id)
        AND ? IN (0, proveedor_id) ".
        $this->betweenPrecio().
        $this->orderBy().
      " LIMIT $this->pagina, $this->porPagina";
    return Conexion::queryTable($sql, $this->idCategoria, $this->idProveedor);
  }

  public function getTotalPaginas() {
    return 0;
  }

  private function betweenPrecio() {
    switch ($this->rangoPrecio) {
      case '0_10': return " AND precio_unidad BETWEEN 0 AND 10 ";
      case '10_50': return " AND precio_unidad BETWEEN 10 AND 50 ";
      case '50_': return " AND precio_unidad >= 50 ";
      default: return "";
    }
  }
  private function orderBy() {
    switch ($this->ordenacion) {
      case 'nombre_asc': return " ORDER BY producto ";
      case 'precio_asc': return " ORDER BY precio_unidad ";
      case 'precio_desc': return " ORDER BY precio_unidad DESC ";
      default: return "";
    }
  }

}
