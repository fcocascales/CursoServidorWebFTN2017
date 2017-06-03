<?php
  /*
    EJERCICIO:

    Mostrar en pantalla cuando se
    visitó la página la última vez.

      date('Y-m-d H:i:s'); // Ahora
  */

  $fichero = "visita.txt";
  if (file_exists($fichero)) {
    $fecha = file_get_contents($fichero);
  } else {
    $fecha = "Esta es la primera visita";
  }
  file_put_contents($fichero, date('Y-m-d H:i:s'));
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Visita</title>
</head>
<body>
  <h1>Última vísita</h1>
  <p><?php echo $fecha ?></p>
</body>
</html>
