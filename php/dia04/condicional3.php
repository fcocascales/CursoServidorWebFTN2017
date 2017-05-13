<?php
  /*
    Partimos de las variables URL (o GET):
      $genero que puede ser femenino o masculino
      $color que puede ser rojo o blanco
    El $resultado será:
      'El regalo es un bolso atrevido'     (masculino y rojo)
      'El regalo es un pantalón clásico'   (masculino y blanco)
      'El regalo es una falda divertida'   (femenino y rojo)
      'El regalo es una chaqueta aburrida' (femenino y blanco)

      http://localhost/dia04/condicional3.php
        ?genero=femenino&color=rojo
        ?genero=femenino&color=blanco
        ?genero=masculino&color=rojo
        ?genero=masculino&color=blanco
  */

  if (isset($_GET['genero'])) {
    $genero = $_GET['genero'];
  }
  else {
    $genero = 'femenino';
  }

  if (isset($_GET['color'])) {
    $color = $_GET['color'];
  }
  else {
    $color = 'rojo';
  }

  // Operador ternario
  $genero = isset($_GET['genero']) ? $_GET['genero'] : 'femenino';
  $color = isset($_GET['color']) ? $_GET['color'] : 'rojo';

  // Sólo en PHP 7
  //$genero = $_GET['genero'] ?? 'femenino';
  //$color = $_GET['color'] ?? 'rojo';

  // Primera solución

  $mensaje = '';
  if ($genero == 'femenino') {
    if ($color == 'rojo') {
      $mensaje = 'El regalo es una falda divertida';
    }
    elseif ($color == 'blanco') {
      $mensaje = 'El regalo es una chaqueta aburrida';
    }
  }
  elseif ($genero == 'masculino') {
    if ($color == 'rojo') {
      $mensaje = 'El regalo es un bolso atrevido';
    }
    elseif ($color == 'blanco') {
      $mensaje = 'El regalo es un pantalón clásico';
    }
  }

  // Segunda solución

  if ($genero == 'femenino' && $color == 'rojo') {
    $mensaje = 'El regalo es una falda divertida';
  }
  elseif ($genero == 'femenino' && $color == 'blanco') {
    $mensaje = 'El regalo es una chaqueta aburrida';
  }
  elseif ($genero == 'masculino' && $color == 'rojo') {
    $mensaje = 'El regalo es un bolso atrevido';
  }
  elseif ($genero == 'masculino' && $color == 'blanco') {
    $mensaje = 'El regalo es un pantalón clásico';
  }
  else {
    $mensaje = '';
  }

  // Tercera solución

  switch ("$genero-$color") {
    case 'femenino-rojo':
      $mensaje = 'El regalo es una falda divertida';
      break;
    case 'femenino-blanco':
      $mensaje = 'El regalo es una chaqueta aburrida';
      break;
    case 'masculino-rojo':
      $mensaje = 'El regalo es un bolso atrevido';
      break;
    case 'masculino-blanco':
      $mensaje = 'El regalo es un pantalón clásico';
      break;
    default:
      $mensaje = '';
  }

  /*
    Por seguridad: Eliminar todas las etiquetas <script>, <strong>, etc.
    Ejemplo:
      $genero
       '<script>alert("masculino");</script>';
       'alert("masculino");'
  */
  $genero = strip_tags($genero);
  $color = strip_tags($color);

  // Por seguridad: Limitar los valores posibles
  $genero = $genero == 'femenino' || $genero == 'masculino'? $genero : '';
  $color = $color == 'rojo' || $color == 'blanco'? $color : '';

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Condicional 3</title>
  </head>
  <body>
    <h1>Condicional 3</h1>
    <p><?php echo $genero; ?></p>
    <p><?php echo $color; ?></p>
    <p><?php echo $mensaje; ?></p>
  </body>
</html>
