<?php
  // switch1.php
  /*
    Estructura condicional:
    para ejecutar unas instrucciones
    en base a una condición.

    Similar al if elseif else
    Para algunas condiciones es más claro que el if

    Se usa cuando se quiere comprobar el valor
    de una variable.
  */
  // Realizar el "dia2/ejercicio2.php" con switch

  $dia = 4;

  switch ($dia) {
    case 1: echo "lunes"; break;
    case 2: echo "martes"; break;
    case 3: echo "miércoles"; break;
    case 4: echo "jueves"; break;
    case 5: echo "viernes"; break;
    case 6: echo "sábado"; break;
    case 7: echo "domingo"; break;
    default: echo "ERROR";
  }


 ?>
