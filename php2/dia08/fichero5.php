<?php
  /*
    Añadir nuevas líneas al final del fichero

    - Abrir el fichero en modo añadir
    - Escribir en el fichero
    - Cerrar el fichero
  */

  $f = fopen("log.txt", "a");
  $texto = date('Y-m-d H:i:s')."\n";
  fwrite($f, $texto);
  fclose($f);

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Log</title>
</head>
<body>
  <h1>Añadir líneas a un fichero</h1>
  <p>
    <a href="log.txt">log.txt</a>
  </p>
</body>
</html>
