<?php
  /*
    Operador ternario o operador condicional.
    Equivale a un IF ELSE pero se escribe más compacto.

    ? :
  */

  if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
  }
  else {
    $num = -1;
  }

  // Primer ejemplo

  if ($num > 0) {
    $signo = 'positivo';
  }
  else {
    $signo = 'cero o negativo';
  }

  $signo = $num > 0 ? 'positivo' : 'cero o negativo';

  // Segundo ejemplo

  if ($num > 0) {
    $signo = 'positivo';
  }
  elseif ($num < 0) {
    $signo = 'negativo';
  }
  else {
    $signo = 'cero';
  }

  $signo = $num > 0 ? 'positivo' : ($num < 0 ? 'negativo' : 'cero');

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Operador ternario 1</title>
  </head>
  <body>
    <h1>Operador ternario 1</h1>
    <p>El número <?php echo $num ?> es <?php echo $signo ?></p>
    <p><?php echo "El número $num es $signo"; ?></p>
  </body>
</html>
