<?php
  session_start();

  if (isset($_SESSION['correcto']))
    $correcto = $_SESSION['correcto'];
  else
    $correcto = false;

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dragón</title>
</head>
<body>
  <h1>Dragón</h1>
  <?php if ($correcto): ?>
    <p><img src="imgs/dragon.jpg"></p>
  <?php else: ?>
    <p>Acceso denegado</p>
  <?php endif; ?>
  <p><a href="clave.php">Introducir la clave</a></p>
</body>
</html>
