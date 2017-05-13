<?php

// La tabla almacen es un array de arrays

$almacen = array(
  //---------- NOMBRE ----------------- KILOS ------ EUROS ---
  array('nombre'=>"Pera",      'cantidad'=>500,  'precio'=> 45.5),
  array('nombre'=>"Manzana",   'cantidad'=>1500, 'precio'=> 56.8),
  array('nombre'=>"Naranja",   'cantidad'=>2500, 'precio'=> 24.3),
  array('nombre'=>"Limón",     'cantidad'=>800,  'precio'=> 66.9),
  array('nombre'=>"Plátano",   'cantidad'=>900,  'precio'=> 71.1),
  array('nombre'=>"Ciruela",   'cantidad'=>1200, 'precio'=>102.3),
  array('nombre'=>"Melocotón", 'cantidad'=>100,  'precio'=> 40.0),
  array('nombre'=>"Sandía",    'cantidad'=>200,  'precio'=> 36.4),
);

function buscarProductoEnAlmacen($nombre) {
  global $almacen;
  foreach($almacen as $producto) {
    if ($nombre == $producto['nombre'])
      return $producto;
  }
  return null;
}
