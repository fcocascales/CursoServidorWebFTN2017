<?php // func10.php

  /*
    Una función que retorna un array indexado
    Es la forma en que función puede retornar varios valores
  */
  function calculo($numero) {
    return array($numero+2, $numero*2, $numero/2, $numero**2);
  }

  // Usar la función

  echo "<h2>Ejemplo 1</h2>";
  $lista = calculo(3); // [5, 6, 1.5, 9]
  //echo $lista; // Da error si hace echo de un array
  print_r($lista); // Función de depuración
  echo "<br>";
  echo implode(", ", $lista); // Convertir el array en string

  echo "<h2>Ejemplo 2</h2>";
  // El list convierte el array indexado en variables
  list($mas2, $por2, $entre2, $cuadrado) = calculo(4);
  echo "+2=$mas2<br>*2=$por2<br>/2=$entre2<br>cuadrado=$cuadrado";
