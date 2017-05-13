<?php

  $factura2 = (object)[
    'numero'=> "1001",
    'cliente'=> "ACME, S.A.",
    'fecha'=> "2017-04-24",
    'iva'=> 0.21,
    'detalles'=> [
      (object)[
        'producto'=> "Sofá",
        'unidades'=> 1,
        'precio'=> 300
      ],
      (object)[
        'producto'=> "Silla",
        'unidades'=> 4,
        'precio'=> 39
      ]
    ]
  ];

  function test1($object) {
    echo "\n<h2>print_r</h2>\n<pre>";
    print_r($object);
    echo "</pre>\n";
  }

  function test2($object) {
    echo "\n<h2>foreach, is_object, is_array</h2>\n<ul>\n";
    foreach($object as $key=>$value) {
      if (is_object($value) || is_array($value)) {
        echo "<li>$key\n<ul>\n";
        foreach($value as $key2=>$value2) {
          if (is_object($value2) || is_array($value2)) {
            echo "<li>$key2\n<ul>\n";
            foreach($value2 as $key3=>$value3) {
              echo "<li>$key3 : <strong>$value3</strong></li>\n";
            }
            echo "</ul>\n</li>\n";
          }
          else echo "<li>$key2 : <strong>$value2</strong></li>\n";
        }
        echo "</ul>\n</li>\n";
      }
      else echo "<li>$key : <strong>$value</strong></li>\n";
    }
    echo "</ul>\n";
  }

  function test3($object) {
    echo "\n<h2>recursive</h2>\n";
    test3recursive($object);
  }
  function test3recursive($item) {
    if (is_object($item) || is_array($item)) {
      echo "<ul>\n";
      foreach($item as $key=>$value) {
        echo "<li>$key &rarr; ";
        test3recursive($value);
        echo "</li>\n";
      }
      echo "</ul>\n";
    }
    else echo "<strong>$item</strong>";
  }

  function test4($factura) {
    echo "\n<h2>direct</h2>\n";
    echo "<h3>Factura</h3>\n";
    echo "Número: <strong>$factura->numero</strong><br>\n";
    echo "Cliente: <strong>$factura->cliente</strong><br>\n";
    echo "Fecha: <strong>$factura->fecha</strong><br>\n";
    echo "IVA: <strong>$factura->iva</strong><br>\n";
    echo "Detalles:<br>\n";
    foreach ($factura->detalles as $index=>$detalle) {
      echo "<h4>$detalle->producto</h4>\n";
      echo "Unidades: <strong>$detalle->unidades</strong><br>\n";
      echo "Precio: <strong>$detalle->precio</strong><br>\n";
    }
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>factura2</title>
  <style media="screen">
    h2 { border-top:1px solid #999; padding-top:1em; }
  </style>
</head>
<body>
  <h1>Estructura de datos con objetos en PHP</h1>
  <?php
    test1($factura2);
    test2($factura2);
    test3($factura2);
    test4($factura2);
  ?>
</body>
</html>
