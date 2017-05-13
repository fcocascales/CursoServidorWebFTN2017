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
<title>Alicia</title>
</head>
<body>
  <h1>Alicia</h1>
  <?php if ($correcto): ?>
    <p><img src="imgs/alicia.jpg"></p>
  <?php else: ?>
    <p>Acceso denegado</p>
  <?php endif; ?>
  <p><a href="clave.php">Introducir la clave</a></p>
</body>
</html>
