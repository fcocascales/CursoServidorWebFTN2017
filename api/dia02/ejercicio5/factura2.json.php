<?php

  $json = file_get_contents("factura.json");
  $factura = json_decode($json); //, $assoc=false); // Objetos

  function test0($json) {
    echo "<h2>file_get_contents</h2>";
    echo "<pre>$json</pre>";
  }

  function test1($factura) {
    echo "<h2>json_decode y print_r</h2>";
    echo "<pre>";
    print_r($factura);
    echo "</pre>";
  }

  function test2($factura) {
    echo "<h2>json_decode y var_dump</h2>";
    echo "<pre>";
    var_dump($factura);
    echo "</pre>";
  }

  function test3($factura) {
    echo "<h2>json_decode y foreach</h2>";
    echo "<h3>Factura</h3>";
    foreach ($factura as $etiqueta=>$contenido) {
      if ($etiqueta == "detalles") {
        foreach($contenido as $detalle) {
          echo "<h4>$detalle->producto</h4>";
          echo "<div>precio=$detalle->precio</div>";
          echo "<div>unidades=$detalle->unidades</div>";
        }
      }
      else {
        echo "<div>$etiqueta=".htmlspecialchars($contenido)."</div>";
      }
    }
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
  <title>factura.json.php</title>
  <style media="screen">
    h2 { border-top:1px solid #999; padding-top:1em; }
  </style>
</head>
<body>
  <h1>factura.json.php</h1>
  <?php
    test0($json);
    test1($factura);
    test2($factura);
    test3($factura);
    test4($factura);
  ?>
</body>
</html>
