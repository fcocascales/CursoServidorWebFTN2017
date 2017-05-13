<?php
  /*
  $min = '';
  $max = '';
  $xml = file_get_contents("clima.xml");
  $clima = new SimpleXMLElement($xml);
  foreach($clima->ciudad as $ciudad) {
    if ($ciudad == 'Sevilla') {
      $min = $ciudad['min_temp'];
      $max = $ciudad['max_temp'];
      break;
    }
  }
  */

  function obtenerTemperaturaSevilla() {
    $xml = file_get_contents("clima.xml");
    $clima = new SimpleXMLElement($xml);
    foreach($clima->ciudad as $ciudad) {
      if ($ciudad == 'Sevilla') {
        $min = $ciudad['min_temp'];
        $max = $ciudad['max_temp'];
        return array($min, $max);
      }
    }
    return array("", "");
  }

  list($min, $max) = obtenerTemperaturaSevilla();


?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sevilla</title>
  <style media="screen">
    .max { color:#f66; }
    .min { color:#66f; }
  </style>
</head>
<body>
  <h1>Sevilla</h1>
  <p>La temperatura más baja ha sido
    <big class="min"><?php echo $min ?>&deg;C</big></p>
  <p>La temperatura más alta ha sido
    <big class="max"><?php echo $max ?>&deg;C</big></p>
</body>
</html>
