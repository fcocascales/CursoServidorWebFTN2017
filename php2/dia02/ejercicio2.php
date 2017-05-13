<?php
  /*
    Crear una variable $dia con un número.
    Si el número es 1 escribir lunes
    Si el número es 2 escribir martes
    ...
    Si el número es 7 escribir domingo
    y sino escribir un mensaje de error
  */

  $dia = 2;

  if ($dia == 1) {
    echo "lunes";
  }
  elseif ($dia == 2) {
    echo "martes";
  }
  elseif ($dia == 3) {
    echo "miércoles";
  }
  elseif ($dia == 4) {
    echo "jueves";
  }
  elseif ($dia == 5) {
    echo "viernes";
  }
  elseif ($dia == 6) {
    echo "sábado";
  }
  elseif ($dia == 7) {
    echo "domingo";
  }
  else {
    echo "error";
  }



 ?>
