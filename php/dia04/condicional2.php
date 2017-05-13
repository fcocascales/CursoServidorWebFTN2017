<?php
  /*
    EJERCICIO:
      - Leer una variable entera por la URL
      - Usar un switch
      - Mostrar el resultado
  */

  if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
  }
  else {
    $num = -1;
  }

  switch ($num) {
    case 1: $romano = 'I'; break;
    case 2: $romano = 'II'; break;
    case 3: $romano = 'III'; break;
    case 4: $romano = 'IV'; break;
    case 5: $romano = 'V'; break;
    case 6: $romano = 'VI'; break;
    case 7: $romano = 'VII'; break;
    case 8: $romano = 'VIII'; break;
    case 9: $romano = 'IX'; break;
    case 10: $romano = 'X'; break;
    case 11: $romano = 'XI'; break;
    case 12: $romano = 'XII'; break;
    default: $romano = '-'; break;
  }

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Condicional 2</title>
  </head>
  <body>
    <h1>Condicional 2</h1>
    <p>El número <?php echo $num; ?>
       en romano es <?php echo $romano; ?></p>       
  </body>
</html>
