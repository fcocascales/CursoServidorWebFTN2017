<?php // func4.php

  /*
    La función doblar:
      - Recibe un parámetro de entrada llamado $numero
      - Retorna el número multiplicado por 2

      - Los datos de entrada se indican en los ( )
      - El datos de salida se indica en el return

  */
  function doblar($numero) {
    return $numero * 2;
  }

  /*
    Uso de la función doblar
    La función equivale al valor que retorna
  */
  echo doblar(5); // Imprime 10
  echo '<br>';
  echo doblar(7); // Imprime 14
  echo '<br>';
  echo doblar(doblar(2)); // Imprime 8
