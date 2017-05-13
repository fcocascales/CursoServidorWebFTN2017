<?php

  // ARRAYS

  $alumnos = array(
    'Jordi',
    'Marta',
    'Eva',
    'David',
    'Guadalupe',
    'Alfredo',
    'Barlan',
    'Antonio M.',
    'Víctor',
    'Elisabeth',
    'Arnau',
    'Roser',
    'Sergio',
    'Antonio C.',
    'Emilio',
  );

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <h1>Arrays</h1>

    <h2>Bucle contador</h2>
    <ul><?php
      for ($i=0; $i < count($alumnos); $i++) {
        $nombre = $alumnos[$i];
        echo "<li>$nombre</li>";
        //echo '<li>'.$nombre.'</li>';
      }
    ?></ul>

    <h2>Bucle de array</h2>
    <ol><?php
      //foreach ($alumnos as $i => $nombre) {
      foreach ($alumnos as $nombre) {
        echo "<li>$nombre</li>";
      }
    ?></ol>

    <h2>Usar la función implode</h2>
    <p><?php
      // implode = Convierte un array en un string
      // explode = Convierte un string en un array
      $texto = implode(', ', $alumnos);
      echo $texto;

      echo '<ul><li>'.
        implode('</li><li>', $alumnos)
        .'</li></ul>';

      //<ul><li>Alfa</li><li>Beta</li><li>Gamma</li></ul>

    ?></p>

  </body>
</html>
