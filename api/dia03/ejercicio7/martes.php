<?php

  $json = file_get_contents('semana.json');
  $semana = json_decode($json, $assoc=true);

  //echo "<pre>"; //print_r($semana); //var_dump($semana);

  function buscarDia($semana, $fecha) {
    foreach($semana as $dia) {
      if ($dia['fecha'] == $fecha) {
        return $dia;
      }
    }
    return null;
  }

  $martes = '2017-04-25';
  $dia = buscarDia($semana, $martes);
  ////extract($dia); // $fecha, $hora, $tarea

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Martes</title>
</head>
<body>
  <h1>Martes</h1>
  <p>Fecha: <strong><?php echo $dia['fecha'] ?></strong></p>
  <p>Hora:  <strong><?php echo $dia['hora'] ?></strong></p>
  <p>Tarea: <strong><?php echo $dia['tarea'] ?></strong></p>
</body>
</html>
