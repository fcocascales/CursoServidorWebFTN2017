<?php
  /*
    Leer los datos almacenado en "datos.json"
  */

  $json = file_get_contents("datos.json");
  $datos = json_decode($json, $assoc=true);

  echo "<pre>";
  print_r($datos);
  echo "</pre>";
