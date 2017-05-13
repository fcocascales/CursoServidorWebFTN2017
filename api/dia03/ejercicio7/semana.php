<?php

  $json = file_get_contents('semana.json');
  $semana = json_decode($json, $assoc=true);

  function buscarDiaPorTarea($semana, $tarea) {
    foreach($semana as $dia) {
      if ($dia['tarea'] == $tarea) {
        return $dia;
      }
    }
    return null;
  }

  function imprimirOpcionesTarea($semana, $tarea) {
    foreach($semana as $dia) {
      $selected = $dia['tarea'] == $tarea? " selected":"";
      echo "<option$selected>".htmlspecialchars($dia['tarea'])."</option>";
    }
  }

  $tarea = isset($_GET['tarea'])? strip_tags($_GET['tarea']) : "";
  $dia = buscarDiaPorTarea($semana, $tarea);

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Semana</title>
</head>
<body>

  <form method="get">
    <label for="tarea">Tarea:</label>
    <select name="tarea" id="tarea">
      <option></option>
      <?php imprimirOpcionesTarea($semana, $tarea) ?>
    </select>
    <button>Enviar</button>
  </form>

  <?php if (!empty($dia)): ?>
    <h2><?php echo $dia['tarea'] ?></h2>
    <p>Fecha: <strong><?php echo $dia['fecha'] ?></strong></p>
    <p>Hora:  <strong><?php echo $dia['hora'] ?></strong></p>
  <?php endif; ?>

</body>
</html>
