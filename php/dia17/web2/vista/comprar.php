<?php
  require_once "../controlador/Comprar.php";

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Comprar</title>
</head>
<body>
<h1>Comprar</h1>
<p>
  <?php echo $comprar->getNombreContacto() ?> está intentando comprar
  <?php echo $comprar->getCantidadProducto() ?> kilos de
  <?php echo $comprar->getNombreProducto() ?>.
</p>
<p>
  <?php echo $comprar->getMensajeOperacion() ?>
</p>
</body>
</html>
