<?php
  /*
    Mapa de la clase
    Array de 2 dimensiones: Un array de arrays
  */

  $alumnos = array(
    array( // Cuarta fila
      '',
      '',
      'Emilio',
    ),
    array( // Tercera fila
      'Arnau',
      'Roser',
      'Sergio',
      'Antonio C.',
    ),
    array( // Segunda fila
      'Alfredo',
      'Barlan',
      'Antonio M.',
      'Víctor',
      'Elisabeth',
    ),
    array( // Primera fila
      'Jordi',
      'Marta',
      'Eva',
      'David',
      'Guadalupe',
    ),
  );

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
    <style>
      table { border-collapse:collapse; }
      td { border:1px solid #999; }
    </style>
  </head>
  <body>
    <h1>Arrays de 2 dimensiones</h1>

    <h2>Párrafos</h2>
    <?php
      // A partir del array alumnos extraemos
      //  los subarrays que son las filas
      foreach ($alumnos as $fila) {
        $texto = implode(' | ', $fila);
        echo "<p>$texto</p>";
      }
    ?>

    <h2>Tabla</h2>
    <h3>Primera solución</h3>
    <table><?php
      foreach ($alumnos as $fila) {
        $texto = implode('</td><td>', $fila);
        echo "<tr><td>$texto</td></tr>";
      }
    ?></table>
    <h3>Segunda solución</h3>
    <?php
      echo '<table>';
      foreach ($alumnos as $fila) {
        echo '<tr>';
        foreach ($fila as $nombre) {
          echo "<td>$nombre</td>";
        }
        echo '</tr>';
      }
      echo '</table>';
    ?>

  </body>
</html>
