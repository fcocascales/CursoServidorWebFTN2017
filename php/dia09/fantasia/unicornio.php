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
<title>Unicornio</title>
</head>
<body>
  <h1>Unicornio</h1>
  <?php if ($correcto): ?>
    <p><img src="imgs/unicornio.jpg"></p>
  <?php else: ?>
    <p>Acceso denegado</p>
  <?php endif; ?>
  <p><a href="clave.php">Introducir la clave</a></p>
</body>
</html>
