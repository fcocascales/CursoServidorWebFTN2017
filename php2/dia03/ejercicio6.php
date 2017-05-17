<?php
// Imprimir el array de: "ejercicio1.php", "ejercicio2.php", ...

  $ejercicios = array(
    "ejercicio1.php", "ejercicio2.php", "ejercicio3.php",
    "ejercicio4.php", "ejercicio5.php", "ejercicio6.php",
    "ejercicio7.php", "ejercicio8.php", "ejercicio9.php",
    "ejercicio10.php"
  );
  foreach ($ejercicios as $fichero) {
    echo "$fichero<br>";
  }

?>
