<?php // func9.php

  /*
    La función total tiene N parámetros (0 o más) cuando se usa.
    Dentro de la función hay un solo parámetro de tipo array.

    El parámetro de los puntos suspensivos ... tiene
    ser el último parámetro
  */
  function total(...$numeros) {
    $acumulador = 0; // Inicializar variable local
    foreach ($numeros as $num) { // Pasa por los números
      $acumulador += $num; // Acumula el resultado
    }
    return $acumulador; // Devuelve el resultado final
  }

  // Ejemplos de uso de la función
  echo total(); // 0
  echo "<br>";
  echo total(2, 5); // 7
  echo "<br>";
  echo total(1, 1, 3, 4, 6); // 15
  echo "<br>";
