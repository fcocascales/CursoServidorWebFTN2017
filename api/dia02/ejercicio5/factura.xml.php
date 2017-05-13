<?php

  $xml = file_get_contents("factura.xml");
  $sxe = new SimpleXMLElement($xml);

  function test0($xml) {
    echo "<h2>file_get_contents</h2>";
    echo "<pre>".htmlspecialchars($xml)."</pre>";
  }

  function test1($sxe) {
    echo "<h2>SimpleXMLElement y print_r</h2>";
    echo "<pre>";
    print_r($sxe);
    echo "</pre>";
  }

  function test2($sxe) {
    echo "<h2>SimpleXMLElement: attributes() y children()</h2>";
    echo "<h3>Factura</h3>";
    foreach($sxe->attributes() as $clave=>$valor) {
      echo "<div>$clave = $valor</div>";
    }
    foreach ($sxe->children() as $etiqueta=>$contenido) {
      echo "<h4>$contenido</h4>";
      foreach($contenido->attributes() as $clave=>$valor) {
        echo "<div>$clave = $valor</div>";
      }
    }
  }

  function test3($factura) {
    echo "<h2>SimpleXMLElement: for</h2>";
    echo "<h3>Factura</h3>";
    echo "<div>numero=$factura[numero]</div>";
    echo "<div>cliente=$factura[cliente]</div>";
    echo "<div>fecha=$factura[fecha]</div>";
    echo "<div>iva=$factura[iva]</div>";
    for ($i=0; $i<$factura->producto->count(); $i++) {
      $producto = $factura->producto[$i];
      echo "<h4>$producto</h4>";
      echo "<div>unidades=$producto[unidades]</div>";
      echo "<div>precio=$producto[precio]</div>";
    }
  }

  function test4($factura) {
    echo "<h2>SimpleXMLElement: foreach</h2>";
    echo "<h3>Factura</h3>";
    echo "<div>numero=$factura[numero]</div>";
    echo "<div>cliente=$factura[cliente]</div>";
    echo "<div>fecha=$factura[fecha]</div>";
    echo "<div>iva=$factura[iva]</div>";
    foreach ($factura->producto as $producto) {
      echo "<h4>$producto</h4>";
      echo "<div>unidades=$producto[unidades]</div>";
      echo "<div>precio=$producto[precio]</div>";
    }
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>factura.xml.php</title>
</head>
<body>
  <h1>factura.xml.php</h1>
  <?php
    test0($xml);
    test1($sxe);
    test2($sxe);
    test3($sxe);
    test4($sxe);
  ?>
</body>
</html>
