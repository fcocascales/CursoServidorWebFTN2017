<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Recibe num y total</title>
</head>
<body>
  <h1>Recibe los parámetros NUM y TOTAL</h1>
  <?php
    // ¿Hay un parámero num en la barra de direcciones
    //   del navegador?
    if (isset($_GET['num'])) {
      // Obtener el valor del parámetro y nos aseguramos
      //   que sea un número entero
      $numero = intval($_GET['num']);
    }
    else {
      $numero = 0; // Valor predeterminado
    }

    if (isset($_GET['total'])) {
      $total = intval($_GET['total']);
    }
    else {
      $total = 1; // Valor predeterminado
    }

    // Hacer un cálculo con los parámetros recibidos

    for($i=0; $i<$total; $i++) {
      echo $numero . '<br>';
    }

  ?>
</body>
</html>
