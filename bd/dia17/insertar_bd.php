<?php
  require_once "funciones.php";

  // Recuperar los datos enviados en el formulario
  // y sanear los datos
  $destino = empty($_POST['destino'])? '' : strip_tags($_POST['destino']);
  $fecha = empty($_POST['fecha'])? '' : strip_tags($_POST['fecha']);
  $precio = empty($_POST['precio'])? 0 : floatval($_POST['precio']);

  // Validación de los datos
  $errores = array();
  if (empty($destino)) $errores[] = "El destino es obligatorio";
  if (!empty($msg = getDateValidationMessage($fecha))) $errores[] = $msg;
  if (empty($precio)) $errores[] = "El precio no puede ser 0";

  if (empty($errores)) {
    // Guardar el viaje en la BD
    $pdo = new PDO("sqlite:acme.db");
    $sql = "INSERT INTO viajes(destino, fecha, precio) VALUES (?, ?, ?)";
    $table = $pdo->prepare($sql);
    $table->execute(array($destino, $fecha, $precio));
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Insertar</title>
</head>
<body>
  <?php
    if (empty($errores)):
      echo '<h1>El viaje ha sido insertado correctamente</h1>';
      echo '<p><a href="viajes.php">Lista de viajes</a></p>';
    else:
      echo '<h1>Errores encontrados</h1>';
      echo '<ul>';
      foreach($errores as $error):
         echo "<li>$error</li>";
      endforeach;
      echo '</ul>';
    endif;
  ?>
</body>
</html>
