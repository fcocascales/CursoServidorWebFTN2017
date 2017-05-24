<?php // func8.php

  /*
    La función total calcula y retorna la suma
    de los números de array

    Las variables usadas dentro de la función son
    variables locales. Sólo existen mientras se ejecuta
    la función.
  */
  function total($array) {
    $suma = 0; // Inicializa la variable local
    foreach($array as $numero) { // Acceder a cada número del array
      $suma = $suma + $numero; // Acumulando la suma
    }
    return $suma; // Dar el resultado final
  }

  // Usar la función total

  $numeros = array(1, 2, 3, 4, 5, 6);
  echo total($numeros); // 21
  echo "<br>";

  echo total(array(2, 3, 5, 7, 11)); // 28
  echo "<br>";

  $cantidad = total(array(2, 4, 6));
  echo $cantidad; // 12
  echo "<br>";
