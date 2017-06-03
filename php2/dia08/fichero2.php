<?php

  if (file_exists("contador.txt")) {
    $contador = file_get_contents("contador.txt");
  } else {
    $contador = 0;
  }
  $contador++;
  file_put_contents("contador.txt", $contador);

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contador</title>
</head>
<body>
  <h1>Contador de visitas</h1>

  <p><?php echo $contador ?></p>
</body>
</html>
