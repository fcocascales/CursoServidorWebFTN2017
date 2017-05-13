<?php
  // Convertir a XML mediante *echo* y *foreach*

  require_once "factura.php";

  // Tipo de datos MIME: "application/xml"
  header("Content-Type: application/xml");
  //header("Content-Type: text/plain");

  // Paso 1
  /*foreach($factura as $clave=>$valor) {
    echo "$clave\n";
  }*/

  // Paso 2
  /*echo '<?xml version="1.0" encoding="UTF-8"?>';
  echo "\n<factura>\n";
  foreach($factura as $clave=>$valor) {
    if ($clave == "detalles") {
      echo "<$clave>\n";
      echo "</$clave>\n";
    } else {
      echo "<$clave>";
      echo htmlspecialchars($valor);
      echo "</$clave>\n";
    }
  }
  echo "</factura>";*/

  // Paso 3
  /*echo '<?xml version="1.0" encoding="UTF-8"?>';
  echo "\n<factura>\n";
  foreach($factura as $clave=>$valor) {
    if ($clave == "detalles") {
      echo "\t<$clave>\n";
      foreach ($valor as $detalle) {
        extract($detalle); // $producto, $unidades, $precio
        echo "\t\t<detalle>\n";
        echo "\t\t\t<producto>".htmlspecialchars($producto)."</producto>\n";
        echo "\t\t\t<unidades>$unidades</unidades>\n";
        echo "\t\t\t<precio>$precio</precio>\n";
        echo "\t\t</detalle>\n";
      }
      echo "\t</$clave>\n";
    } else {
      echo "\t<$clave>";
      echo htmlspecialchars($valor);
      echo "</$clave>\n";
    }
  }
  echo "</factura>";*/

  // Paso 4
  echo '<?xml version="1.0" encoding="UTF-8"?>';
  extract($factura); // $numero, $cliente, $fecha, $iva, $detalles
  echo "\n<factura
    numero=\"$numero\"
    cliente=\"$cliente\"
    fecha=\"$fecha\"
    iva=\"$iva\">\n";
  foreach($detalles as $detalle) {
    extract($detalle); // $producto, $unidades, $precio
    echo "<producto
      unidades=\"$unidades\"
      precio=\"$precio\">$producto</producto>\n";
  }
  echo "</factura>";
