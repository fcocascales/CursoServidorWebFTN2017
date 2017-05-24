<?php

  $tabla = 0;

  if (isset($_GET['tabla'])) {
    $tabla = intval($_GET['tabla']);
  }

 ?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tabla del <?php echo $tabla ?></title>
</head>
<body>
  <h1>Tabla de multiplicar del <?php echo $tabla ?></h1>
  <?php
    for ($i=0; $i<=12; $i++) {
      echo "$i &times; $tabla = ".($i*$tabla)."<br>";
    }
  ?>
</body>
</html>
