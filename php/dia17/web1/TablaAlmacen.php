<?php

// La tabla almacen es un array de productos

require_once "Producto.php";

$almacen = array(
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

function buscarProductoEnAlmacen($nombre) {
  global $almacen;
  foreach($almacen as $producto) {
    if ($nombre == $producto->getNombre())
      return $producto;
  }
  return null;
}
