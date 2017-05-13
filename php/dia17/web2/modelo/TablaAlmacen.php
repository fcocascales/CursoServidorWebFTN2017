<?php

// La tabla almacen es un array de productos

require_once "Producto.php";

class TablaAlmacen {

  private $almacen;

  public function __construct() {
    $this->almacen = array(
      //---------- NOMBRE --- KILOS --- PRECIO ---
      new Producto('Pera',       500,    45.5),
      new Producto('Manzana',   1500,    56.8),
      new Producto('Naranja',   2500,    24.3),
      new Producto('Limón',      800,    66.9),
      new Producto('Plátano',    900,    71.1),
      new Producto('Ciruela',   1200,   102.3),
      new Producto('Melocotón',  100,    40.0),
      new Producto('Sandía',     200,    36.4),
    );
  }

  public function listadoNombres() {
    $listado = array();
    foreach($this->almacen as $contacto) {
      $listado[] = $contacto->getNombre();
    }
    return $listado;
  }

  public function buscarProducto($nombre) {
    foreach($this->almacen as $producto) {
      if ($nombre == $producto->getNombre())
        return $producto;
    }
    return null;
  }

}
