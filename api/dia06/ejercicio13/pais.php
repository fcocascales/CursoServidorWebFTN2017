<?php

  $ruta = "http://localhost/api/dia06/ejercicio12";

  $json = file_get_contents("$ruta/continentes.json.php");
  $continentes = json_decode($json, $assoc=true);

  //print_r($continentes);


?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ficha del país</title>
</head>
<body>
  <h1>Ficha del país</h1>
</body>
</html>
