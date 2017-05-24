<?php // func7.php

  /*
    El return finaliza la función
  */
  function signo($numero)
  {
    if ($numero > 0) {
      return "+";
    }
    if ($numero < 0) {
      return "-";
    }
    return 0;
  }

  // Ejemplo de uso de la función
  echo signo(5); // +
  echo "<br>";
  echo signo(-3); // -
  echo "<br>";
  echo signo(0); // 0
