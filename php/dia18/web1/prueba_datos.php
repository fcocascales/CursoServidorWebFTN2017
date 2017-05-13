<?php

  require_once "datos1.php";
  require_once "datos2.php";
  require_once "datos3.php";

  echo "<h1>Pruebas de datos</h1>";
  echo "<pre>";

  echo "<h2>Prueba 1</h2>";
  print_r($datos1);

  echo "<h2>Prueba 2</h2>";
  print_r($datos2);

  echo "<h2>Prueba 3</h2>";
  print_r($datos3);

  echo "</pre>";
