<?php // func6.php

  /*
    La función potencia tiene 2 parámetros
    - El primer parámetro $numero es obligatorio
    - El segundo parámetro es opcional
      Si no se pone toma el valor 2
    Los parámetros opcionales van al final
  */
  function potencia($numero, $exponente=2) {
    return $numero ** $exponente;
  }

  // Uso de la función

  echo potencia(3); // 9
  echo "<br>";
  echo potencia(2, 3); // 8
  echo "<br>";
