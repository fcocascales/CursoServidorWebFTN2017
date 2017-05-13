<?php
  /*
    Arrays asociativos

    En los arrays indexados se accede a cada
    elemento con un índice. Por ejemplo:
       $alumnos[0]
       $alumnos[1]

    En los arrays asociativos se accede a los
    elementos con una clave de texto. Por ejemplo:
      $alumnos['jordi']
      $alumnos['marta']
  */
  $alumnos = array(
    'jordi'=> 'Jordi Rubio',
    'marta'=> 'Marta Fabra',
    'eva'=> 'Eva Palacio',
    'david'=> 'David García',
    'lupe'=> 'Guadalupe Gallardo',
    'alfredo'=> 'Alfredo Cela',
    'barlan'=> 'Barlan Urizar',
    'antonio'=> 'Antonio Montero',
    'victor'=> 'Víctor Bustos',
    'eli'=> 'Elisabeth Revilla',
    'arnau'=> 'Arnau Castellanos',
    'roser'=> 'Roser Teixidó',
    'sergio'=> 'Sergio Fontecha',
    'toni'=> 'Antonio Comas',
    'emilio'=> 'Emilio Morales',
  );

  $alumnos['fco'] = 'Francisco Cascales';
  // $_GET['num']

  /*
    <dl>
      <dt>Clave</dt>
      <dd>Valor</dd>
      <dt>Clave2</dt>
      <dd>Valor2</dd>
    </dl>
  */

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <h1>Array asociativo</h1>
    
    <h2>Mostrar el array</h2>
    <?php
      echo '<dl>';
      foreach ($alumnos as $key => $value) {
        echo "<dt>$key</dt>";
        echo "<dd>$value</dd>";
      }
      echo '</dl>';
    ?>

    <h2>Ordenar por la clave</h2>
    <?php
      ksort($alumnos);
      echo '<dl>';
      foreach ($alumnos as $key => $value) {
        echo "<dt>$key</dt>";
        echo "<dd>$value</dd>";
      }
      echo '</dl>';

    ?>




  </body>
</html>
