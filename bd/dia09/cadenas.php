<?php
/*
  $a = "Pepe";

  $b = "Hola $a";

  echo $b; // "Hola Pepe"

  $a = "1";

  echo "$a + $a";  // "1 + 1"

  $a = "NULL";

  echo "$a + $a";  // "NULL + NULL"

  $a = null;

  echo "$a + $a";  // " + "
*/

$nombre = "Pepe";
$dieta_id = null;
$longitud = null;

$sql = "INSERT INTO dinosaurios(nombre, dieta_id, longitud)
  VALUES ('$nombre', $dieta_id, $longitud)";

echo $sql;
