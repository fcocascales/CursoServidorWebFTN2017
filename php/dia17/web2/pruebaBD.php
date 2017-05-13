<?php

  require_once "modelo/BaseDatos.php";
  $bd = new BaseDatos();

  echo "<h1>Base de datos</h1>";
  echo "<pre>";
  print_r($bd);


 ?>
