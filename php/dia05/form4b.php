<?php

  include "poblaciones.php";

  // Recuperar los datos enviados en el formulario
  $nombre = isset($_POST['nombre'])? $_POST['nombre'] : '';
  $poblacion = isset($_POST['poblacion'])? $_POST['poblacion'] : '';

  // Sanear el nombre
  $nombre = strip_tags($nombre); // Quitar etiquetas HTML
  $nombre = substr($nombre, 0, 50); // Límita la longitud

  // Validar la población
  if ( ! in_array($poblacion, $poblaciones)) {
    $poblacion = '';
  }

  // A partir de este punto las variables nombre y poblacion
  // tienen un valor correcto

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form 4b</title>
  </head>
  <body>
    <h1>Obtener los datos del formulario</h1>
    <?php if(!empty($nombre) && !empty($poblacion)): ?>
      <h2>Datos recibidos</h2>
      <p>El nombre es <strong><?php echo htmlspecialchars($nombre) ?></strong></p>
      <p>La población es <strong><?php echo $poblacion ?></strong></p>
    <?php else: ?>
      <p>Falta el nombre o la población</p>
    <?php endif; ?>
  </body>
</html>
