<?php // func5.php

  /*
    La función suma
     - ENTRADA: 2 parámetros $a y $b
     - SALIDA: el return
  */
  function suma($a, $b) {
    return $a + $b;
  }

  /*
    Uso de la función
  */
  echo suma(2, 3); // 5
  echo "<br>";
  echo suma(10, -7); // 3
  echo "<br>";
  echo suma(suma(1, 2), 3); // 6
  echo "<br>";
  echo suma(suma(1, 2), suma(3, 4)); // 10
  echo "<br>";

  $num1 = 8;
  $num2 = 4;
  echo suma($num1, $num2); // 12
