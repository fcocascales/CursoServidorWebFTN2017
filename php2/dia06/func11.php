<?php // func11.php

  /*
    Función que retorna un array asociativo
  */
  function capitalizacion($texto) {
    return array(
      'minusculas'=> mb_strtolower($texto),
      'mayusculas'=> mb_strtoupper($texto),
      'capital'=> ucfirst($texto),
      'palabras'=> ucwords($texto),
    );
  }

  // Usa la función

  echo "<h2>Ejemplo 1</h2>";
  // La función equivale al valor que retorna
  // En este caso la función capitalizacion equivale a un array asociativo
  foreach(capitalizacion("Hola mundo") as $key=>$value) {
    echo "$key : $value <br>";
  }

  echo "<h2>Ejemplo 2</h2>";
  // extract convierte el array asociativo en variables
  // En este caso está creando las variables $minusculas,
  //   $mayusculas, $capital y $palabras;
  extract(capitalizacion("Hoy es martes"));
  echo "variable1 = $minusculas<br>";
  echo "variable2 = $mayusculas<br>";
  echo "variable3 = $capital<br>";
  echo "variable4 = $palabras<br>";
