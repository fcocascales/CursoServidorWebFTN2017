<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio 1</title>
  <style media="screen">
    table { border-collapse:collapse; }
    td { border:1px solid #999; padding:0.3em 1em; }
    th { background-color:#ccc; }
  </style>
</head>
<body>
<?php

// Los datos que provienen de un fetchAll son como la siguiente tabla.
// Un array indexado de arrays asociativos.

$productos = [
  // Campos: id, nombre y precio
  [ 'id'=>2,  'nombre'=>"Teclado",    'precio'=>12  ], // primera fila
  [ 'id'=>3,  'nombre'=>"Monitor",    'precio'=>240 ], // segunda fila
  [ 'id'=>5,  'nombre'=>"Ratón",      'precio'=>8   ], // tercera fila
  [ 'id'=>7,  'nombre'=>"Procesador", 'precio'=>50  ], // cuarta fila
  [ 'id'=>11, 'nombre'=>"Gráfica",    'precio'=>160 ], // quinta fila
];

echo "<h1>Ejercicio con tablas</h1>";

echo "<h2>1. Hacer un print_r de la tabla</h2>";
solucion1($productos);

echo "<h2>2. Mostrar el nombre y el precio del tercer producto</h2>";
solucion2($productos);

echo "<h2>3. Mostrar el id y el nombre del primer producto</h2>";
solucion3($productos);

echo "<h2>4. Mostrar el id y el precio del último producto</h2>";
solucion4($productos);

echo "<h2>5. Mostrar todos los productos usando &lt;ol&gt; y &lt;li&gt;</h2>";
/*
  <ol>
    <li value="$id"><strong>$nombre</strong> $precio€</li>
    ...
  </ol>
*/
solucion5($productos);

echo "<h2>6. Mostrar todos los productos usando &lt;h3&gt;, &lt;p&gt;</h2>";
/*
  <h3>$nombre</h3>
  <p>Id=$id<br>
  Precio=$precio€</p>
  ...
*/
solucion6($productos);

echo "<h2>7. Mostrar todos los productos usando &lt;table&gt;, &lt;tr&gt;, &lt;td&gt;</h2>";
solucion7($productos);

echo "<h2>8. Calcular la suma de precios de los productos</h2>";
solucion8($productos);

echo "<h2>9. Calcular el promedio de precio de los productos</h2>";
solucion9($productos);

echo "<h2>10. Mostrar los productos que valen al menos 100€</h2>";
solucion10($productos);

echo "<h2>11. Mostrar los productos en formato JSON</h2>";
/*
  Sin usar header(), usando <pre> y usando json_encode()
*/
solucion11($productos);

echo "<h2>12. Mostrar los productos en formato XML sin atributos</h2>";
/*
  Sin usar header(), usando <pre> y usando htmlspecialchars()
*/
solucion12($productos);


function solucion1($productos) {
  echo "<pre>";
  print_r($productos);
  echo "</pre>";
}
function solucion2($productos) {
  echo "<p>Nombre: ".$productos[2]['nombre']."<br>";
  echo "precio: ".$productos[2]['precio']."</p>";
}
function solucion3($productos) {
  echo "<p>Id: ".$productos[0]['id']."<br>";
  echo "nombre: ".$productos[0]['nombre']."</p>";
}
function solucion4($productos) {
  $ultimo = count($productos) - 1;
  echo "<p>Id: ".$productos[$ultimo]['id']."<br>";
  echo "precio: ".$productos[$ultimo]['precio']."</p>";
}
function solucion5($productos) {
  echo "<ol>";
  foreach ($productos as $row) {
    echo "<li value=\"$row[id]\"><strong>$row[nombre]</strong> $row[precio] €</li>";
  }
  echo "</ol>";
}
function solucion6($productos) {
  foreach ($productos as $row) {
    echo "<h3>$row[nombre]</h3>";
    echo "<p>Id=$row[id]<br>";
    echo "Precio=$row[precio] €</p>";
  }
}
function solucion7($productos) {
  echo "<table>";
  echo "<tr><th>Id</th><th>Nombre</th><th>Precio</th></tr>";
  foreach ($productos as $row) {
    echo "<tr>";
    echo "<td>$row[id]</td>";
    echo "<td>$row[nombre]</td>";
    echo "<td>$row[precio] €</td>";
    echo "</tr>";
  }
  echo "</table>";
}
function solucion8($productos) {
  $suma = 0;
  foreach ($productos as $row) {
    $suma += $row['precio'];
  }
  echo "<p>La suma da $suma €</p>";
}
function solucion9($productos) {
  $suma = 0;
  foreach ($productos as $row) {
    $suma += $row['precio'];
  }
  $promedio = $suma / count($productos);
  echo "<p>El promedio da $promedio €</p>";
}
function solucion10($productos) {
  echo "<p>";
  foreach ($productos as $row) {
    if ($row['precio'] >= 100) {
      echo "$row[nombre] $row[precio] €<br>";
    }
  }
  echo "</p>";
}
function solucion11($productos) {
  $json = json_encode($productos, JSON_PRETTY_PRINT);
  echo "<pre>$json</pre>";
}
function solucion12($productos) {
  $xml = "";
  $xml.= '<?xml version="1.0" encoding="UTF-8"?>';
  $xml.= "\n<productos>\n";
  foreach ($productos as $row) {
    $xml.= "\t<producto>\n";
    foreach($row as $key=>$value) {
      $xml.= "\t\t<$key>$value</$key>\n";
    }
    //echo "<id>$row[id]</id>";
    //echo "<nombre>$row[nombre]</nombre>";
    //echo "<precio>$row[precio]</precio>";
    $xml.= "\t</producto>\n";
  }
  $xml.= "</productos>";
  echo "<pre>".htmlspecialchars($xml)."</pre>";
}

?>
</body>
</html>
