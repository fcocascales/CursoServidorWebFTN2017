<?php

  $json = file_get_contents("factura.json");
  $factura = json_decode($json, $assoc=true);

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
          extract($detalle); // $producto, $precio, $unidades
          echo "<h4>$producto</h4>";
          echo "<div>precio=$precio</div>";
          echo "<div>unidades=$unidades</div>";
        }
      }
      else {
        echo "<div>$etiqueta=".htmlspecialchars($contenido)."</div>";
      }
    }
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>factura.json.php</title>
</head>
<body>
  <h1>factura.json.php</h1>
  <?php
    test0($json);
    test1($factura);
    test2($factura);
    test3($factura);
  ?>
</body>
</html>
