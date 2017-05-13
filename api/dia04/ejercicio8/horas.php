<?php

  $xml = file_get_contents("http://xml.tutiempo.net/xml/7183.xml");
  $datos = new SimpleXMLElement($xml);

  $city = $datos->localidad->nombre;
  $time = getTime($datos);
  $hora = buscarHora($datos, $time);

  function getTime($datos) {
    if (isset($_GET['time'])) return strip_tags($_GET['time']);
    else return $datos->pronostico_horas->hora[0]->hora_datos;
  }

  function buscarHora($datos, $time) {
    foreach ($datos->pronostico_horas->hora as $hora) {
      if ($hora->hora_datos == $time) return $hora;
    }
    return null;
  }

  function imprimirOpcionesHoras ($datos, $time) {
    foreach ($datos->pronostico_horas->hora as $hora) {
      $selected = $hora->hora_datos == $time? " selected" : "";
      echo "<option$selected>$hora->hora_datos</option>";
    }
  }
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tiempo en <?php echo $city ?></title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1>Tiempo en <strong><?php echo $city ?></strong></h1>

  <form method="get" class="time">
    <label for="time">Hora:</label>
    <select name="time" id="time">
      <?php imprimirOpcionesHoras($datos, $time); ?>
    </select>
    <button>Enviar</button>
  </form>

  <h2><?php echo $hora->texto ?></h2>

  <p class="icono">
    <img src="<?php echo $hora->icono ?>">
  </p>

  <ul class="clima">
    <li>
      <span>Temperatura:</span>
      <strong><?php echo $hora->temperatura ?>&deg;C</strong>
    </li>
    <li>
      <span>Humedad:</span>
      <strong><?php echo $hora->humedad ?>%</strong>
    </li>
    <li>
      <span>Presión atmosférica:</span>
      <strong><?php echo $hora->presion ?> mbar</strong>
    </li>
    <li>
      <span>Viento:</span>
      <strong>
        <?php echo $hora->viento ?> km/h
        <img src="<?php echo $hora->ico_viento ?>">
        <?php echo $hora->dir_viento ?>
      </strong>
    </li>
  </ul>

  <p class="referencia">Datos obtenidos de <a href="https://tutiempo.net">TuTiempo.net</a></p>
</body>
</html>
