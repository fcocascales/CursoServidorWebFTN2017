<?php

  // 1) Inicializar las variables
  $numero = 0;
  $operacion = "";

  // 2) Obtener los parámetros de la URL
  if (isset($_POST['numero'])) {
    $numero = floatval($_POST['numero']);
  }
  if (isset($_POST['operacion'])) {
    $operacion = strip_tags($_POST['operacion']);
  }

  // 3) Realizar el cálculo
  switch ($operacion) {
    case 'doblar':
      $resultado = 2*$numero;
      break;
    case 'cuadrado':
      $resultado = $numero ** 2;
      break;
    case 'cubo':
      $resultado = $numero ** 3;
      break;
    case 'raíz':
      $resultado = sqrt($numero);
      break;
    default:
      $resultado = "ERROR";
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Resultado</title>
</head>
<body>
  <h1>Resultado</h1>
  <p>
    Número = <?php echo $numero ?><br>
    Operación = <?php echo $operacion ?><br>
    Resultado = <?php echo $resultado ?>
  </p>
</body>
</html>
