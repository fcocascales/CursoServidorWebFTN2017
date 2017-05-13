<?php
  // Recuperar todos los datos del formulario
  $id = isset($_POST['id'])? intval($_POST['id']) : 0;
  if ($id == 0) die("Falta el parámetro POST id");

  $nombre = isset($_POST['nombre'])? strip_tags($_POST['nombre']) : "";
  $dieta_id = isset($_POST['dieta_id'])? intval($_POST['dieta_id']) : 0;
  $longitud = isset($_POST['longitud'])? intval($_POST['longitud']) : 0;

  $host = "localhost";
  $db   = "bd_mesozoico";
  $user = "root";
  $pass = "";

  $sql = "UPDATE dinosaurios
          SET nombre = ?, dieta_id = ?, longitud = ?
          WHERE id = ?";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET UTF8");

    $sentence = $pdo->prepare($sql);
    $sentence->execute(array($nombre, $dieta_id, $longitud, $id));
  }
  catch (Exception $ex) {
    die("ERROR ".$ex->getCode().": ".$ex->getMessage());
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dino modificado</title>
</head>
<body>
  <h1>El dinosaurio ha sido modificado en la BD</h1>
  <p>nombre: <?php echo htmlspecialchars($nombre) ?></p>
  <p>dieta_id: <?php echo $dieta_id ?></p>
  <p>longitud: <?php echo $longitud ?></p>
  <p>
    <a href="listado.php">Volver al listado de dinosaurios</a>
  </p>
</body>
</html>
