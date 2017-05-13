<?php
  $xml = file_get_contents("http://xml.tutiempo.net/xml/7183.xml");
  $datos = new SimpleXMLElement($xml);

  $city = $datos->localidad->nombre;
  $date = obtenerDate($datos);
  $dia = buscarDia($datos, $date);

  function obtenerDate($datos) {
    if (isset($_GET['date'])) return strip_tags($_GET['date']);
    else return $datos->pronostico_dias->dia[0]->fecha;
  }
  function buscarDia($datos, $date) {
    foreach ($datos->pronostico_dias->dia as $dia) {
      if ($dia->fecha == $date) return $dia;
    }
    return null;
  }
  function imprimirOpcionesDias($datos, $date) {
    foreach ($datos->pronostico_dias->dia as $dia) {
      $value = $dia->fecha;
      $label = $dia->fecha_larga;
      $selected = $value == $date? " selected": "";
      echo "<option$selected value=\"$value\">$label</option>\n";
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
    <label for="date">Día:</label>
    <select name="date" id="date">
      <?php imprimirOpcionesDias($datos, $date); ?>
    </select>
    <button>Enviar</button>
  </form>

  <h2><?php echo $dia->texto ?></h2>

  <p class="icono">
    <img src="<?php echo $dia->icono ?>">
  </p>

  <ul class="clima">
    <li>
      <span>Temperatura:</span>
      <strong>
        <span class="min"><?php echo $dia->temp_minima ?>&deg;C</span> &mdash;
        <span class="max"><?php echo $dia->temp_maxima ?>&deg;C</span>
      </strong>
    </li>
    <li>
      <span>Humedad:</span>
      <strong><?php echo $dia->humedad ?>%</strong>
    </li>
    <li>
      <span>Viento:</span>
      <strong>
        <?php echo $dia->viento ?> km/h
        <img src="<?php echo $dia->ico_viento ?>">
        <?php echo $dia->dir_viento ?>
      </strong>
    </li>
    <li>
      <span>Sol:</span>
      <strong>
        <?php echo $dia->salida_sol ?> &mdash;
        <?php echo $dia->puesta_sol ?>
      </strong>
    </li>
  </ul>

  <p class="referencia">Datos obtenidos de <a href="https://tutiempo.net">TuTiempo.net</a></p>
</body>
</html>
