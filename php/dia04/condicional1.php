<?php

  if (isset($_GET['dia'])) {
    $dia = intval($_GET['dia']);
  }
  else {
    $dia = -1; // Valor predeterminado
  }

  switch ($dia) {
    case 1:
      $semana = 'lunes';
      break;
    case 2:
      $semana = 'martes';
      break;
    case 3: $semana = 'miércoles'; break;
    case 4: $semana = 'jueves'; break;
    case 5: $semana = 'viernes'; break;
    case 6: $semana = 'sábado'; break;
    case 7: $semana = 'domingo'; break;
    default: $semana = 'ERROR';
  }


?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Condicional 1</title>
  </head>
  <body>
    <h1>Condicional 1</h1>
    <p>La variable día vale <?php echo $dia; ?></p>
      <p>La variable semana vale <?php echo $semana; ?></p>
  </body>
</html>
