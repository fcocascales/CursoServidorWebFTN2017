<?php
/*
  Bucle 2: do while

  Ejecuta el bloque de instrucciones
  mientras se cumpla la condición.

  El bucle do while se usa poquísimo.

  El bucle "while" se ejecuta 0 o más veces
  El bucle "do while" se ejecuta 1 o más veces
*/

// Imprimir 10, 20, 30, ... 100

  $contador = 0;

  do { // Hacer...

    $contador += 10; // $contador = $contador + 10;

    echo $contador;
    echo "<br>";

  } while ($contador < 100); // Mientras se cumpla la condición

  echo "Final";








?>
