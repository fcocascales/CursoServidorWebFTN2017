<?php

  $xml = file_get_contents("clima.xml");
  $clima = new SimpleXMLElement($xml);

  function buscarCiudad($clima, $nombre) {
    foreach($clima->ciudad as $ciudad) {
      if ($ciudad == $nombre) {
        return $ciudad;
      }
    }
    return null;
  }

  function imprimirOpcionesCiudad($clima, $nombre) {
    foreach($clima->ciudad as $ciudad) {
      $selected = $ciudad == $nombre? " selected":"";
      echo "<option$selected>".htmlspecialchars($ciudad)."</option>";
    }
  }

  $nombre = isset($_GET['nombre'])? strip_tags($_GET['nombre']) : "";
  $ciudad = buscarCiudad($clima, $nombre);

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ciudad</title>
  <style media="screen">
    .max { color:#f66; }
    .min { color:#66f; }
  </style>
</head>
<body>

  <form method="get">
    <label for="nombre">Ciudad:</label>
    <select name="nombre" id="nombre">
      <option></option>
      <?php imprimirOpcionesCiudad($clima, $nombre); ?>
    </select>
    <button>Enviar</button>
  </form>

  <?php if (!empty($ciudad)): ?>
    <h1><?php echo $ciudad ?></h1>
    <p>La temperatura más baja ha sido
      <big class="min"><?php echo $ciudad['min_temp'] ?>&deg;C</big></p>
    <p>La temperatura más alta ha sido
      <big class="max"><?php echo $ciudad['max_temp'] ?>&deg;C</big></p>
  <?php endif; ?>

</body>
</html>
