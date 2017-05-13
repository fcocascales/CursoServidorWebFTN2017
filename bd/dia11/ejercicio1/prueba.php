<?php
  // prueba.php

  require_once "basedatos.php";

  echo "<h1>Prueba</h1>";

  echo "<h2>conectar_bd</h2>";
  $pdo = conectar_bd();

  echo "<h2>obtener_dietas</h2>";
  $dietas = obtener_dietas($pdo);
  foreach ($dietas as $row) {
    echo $row['id']." ".$row['dieta']."<br>";
  }

  echo "<h2>obtener_dinosaurios</h2>";
  $dieta_id = 200;
  $dinos = obtener_dinosaurios($pdo, $dieta_id);
  foreach ($dinos as $row) {
    echo $row['id']." ".$row['nombre']."<br>";
  }
