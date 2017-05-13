<?php

  // $t = $_GET['tabla'];

  if (isset($_GET['tabla'])) {
    $t = intval($_GET['tabla']);
  }
  else {
    $t = 0;
  }

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ejercicio 8</title>
</head>
<body>
<h1>Ejercicio 8</h1>
<p>Mostrar la tabla de multiplicar</p>
<?php
  for ($i=1; $i<=10; $i++) {
    $resultado = $i * $t;
    echo "$i &times; $t = $resultado<br>";
  }
?>
<ul>
  <li><a href="?tabla=0">Cero</a></li>
  <li><a href="?tabla=1">Uno</a></li>
  <li><a href="?tabla=2">Dos</a></li>
  <li><a href="?tabla=3">Tres</a></li>
  <li><a href="?tabla=4">Cuatro</a></li>
  <li><a href="?tabla=5">Cinco</a></li>
  <li><a href="?tabla=6">Seis</a></li>
  <li><a href="?tabla=7">Siete</a></li>
  <li><a href="?tabla=8">Ocho</a></li>
  <li><a href="?tabla=9">Nueve</a></li>
  <li><a href="?tabla=10">Diez</a></li>
</ul>
</body>
</html>
