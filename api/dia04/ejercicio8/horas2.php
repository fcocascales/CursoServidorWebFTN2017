<?php

  $xml = file_get_contents("http://xml.tutiempo.net/xml/7183.xml");
  $datos = new SimpleXMLElement($xml);

  $city = $datos->localidad->nombre;
  $datetime = getDateTime($datos);
  $hora = buscarHora($datos, $datetime);

  function getDateTime($datos) {
    if (isset($_GET['datetime'])) {
      return strip_tags($_GET['datetime']);
    }
    else {
      $hora = $datos->pronostico_horas->hora[0];
      return "$hora->fecha $hora->hora_datos";
    }
  }

  function buscarHora($datos, $datetime) {
    list($date, $hour) = explode(" ", $datetime);
    foreach ($datos->pronostico_horas->hora as $hora) {
      if ($hora->hora_datos == $hour && $hora->fecha = $date) return $hora;
    }
    return null;
  }

  function imprimirOpcionesHoras ($datos, $datetime) {
    $today = date('Y-n-j'); // http://php.net/manual/en/function.date.php
    foreach ($datos->pronostico_horas->hora as $hora) {
      $value = "$hora->fecha $hora->hora_datos";
      $selected = $value == $datetime? " selected" : "";
      $day = $hora->fecha == $today? "hoy": "mañana";
      echo "<option$selected value=\"$value\">$hora->hora_datos $day</option>\n";
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

  <form method="get" class="datetime">
    <label for="datetime">Hora:</label>
    <select name="datetime" id="datetime">
      <?php imprimirOpcionesHoras($datos, $datetime); ?>
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
