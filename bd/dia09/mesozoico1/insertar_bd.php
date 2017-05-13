<?php

  // Recoger los datos enviados en el formulario
  $nombre = isset($_POST['nombre'])? strip_tags($_POST['nombre']) : null;
  $dieta_id = isset($_POST['dieta_id'])? intval($_POST['dieta_id']) : null;
  $longitud = isset($_POST['longitud'])? intval($_POST['longitud']) : null;

  $host = "localhost";
  $db   = "bd_mesozoico";
  $user = "root";
  $pass = "";

  $sql = "INSERT INTO dinosaurios(nombre, dieta_id, longitud)
    VALUES (?, ?, ?)";

/*
  TODO:
    - Que se puedan insertar dinosaurios sin dieta o longitud (NULL)
    - Mensajes de error más claros
*/

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET UTF8");

    // Prepara el código SQL para ser ejecutado
    $sentence = $pdo->prepare($sql);
    $sentence->execute(array($nombre, $dieta_id, $longitud));
    $mensaje = "El dinosaurio <q>$nombre</q> ha sido insertado en la BD";
  }
  catch (Exception $ex) {
    $mensaje = "ERROR ".$ex->getCode().": ".$ex->getMessage();
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Insertar dinosaurio</title>
</head>
<body>
  <h1>Insertar dinosaurio</h1>
  <?php echo $mensaje ?>
  <p>
    <a href="javascript:history.back()">Volverlo a intentar</a>
    <br>
    <a href="insertar.php">Insertar un nuevo dinosaurio</a>
  </p>
  <p>
    <a href="listado.php">Volver al listado de dinosaurios</a>
  </p>
</body>
</html>
