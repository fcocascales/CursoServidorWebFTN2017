<?php
  require_once "backend.php";
  acceso_restringido();
  $info = info_usuario();

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Backend</title>
  <style media="screen">
    body { background-color:#9f9; }
  </style>
</head>
<body>
  <h1>Inicio del Backend</h1>
  <h2>Bienvenido <?php echo $info['name'] ?></h2>
  <p>Tu correo es <?php echo $info['email'] ?></p>
  <p><a href="logout.php">Desconectar</a></p>
</body>
</html>
