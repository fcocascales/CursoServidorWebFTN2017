<?php
  /*
    Bucle 1: while

    Mientras se cumpla la condición va
    ejecutando el bloque de instrucciones

    Es el bucle más básico pero se  usa poco.

    Hay que tener la precaución de no escribir
    un bucle infinito
  */

  // Imprimir los números del 1 al 10
  // Se parece mucho a un bucle for

  $numero = 1;

  while ($numero <= 10)
  {
    echo "$numero<br>";

    $numero = $numero + 1; // $numero++;
  }

  echo "The end";

 ?>
