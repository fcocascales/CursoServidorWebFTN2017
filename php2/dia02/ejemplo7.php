<?php

  $pais = "Reino Unido";
  $capital = "Londres";
  $moneda = "Libra";
  $poblacion = 65000000;

  // Inserta código PHP dentro del código HTML

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $pais ?></title>
</head>
<!-- Comentario en HTML -->
<body>
  <h1>Los datos de <?php echo $pais ?></h1>
  <p>Capital: <strong><?php echo $capital ?></strong><br>
  Moneda: <strong><?php echo $moneda ?></strong><br>
  Población: <strong><?php echo $poblacion ?><strong></p>
</body>
</html>
