<?php
  // prueba.php

  require_once "BaseDatos.php";

  echo "<h1>Prueba</h1>";

  echo "<h2>new BaseDatos()</h2>";
  $bd = new BaseDatos();

  echo "<h2>::getDietas</h2>";
  foreach ($bd->getDietas() as $row) {
    echo $row['id']." ".$row['dieta']."<br>";
  }

  echo "<h2>::getDinosaurios</h2>";
  foreach ($bd->getDinosaurios($dieta_id=200) as $row) {
    echo $row['id']." ".$row['nombre']."<br>";
  }

  echo "<h2>::getNombreDieta</h2>";
  echo $bd->getNombreDieta($dieta_id=200);
