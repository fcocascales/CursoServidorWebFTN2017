<?php
  require_once "conexion.php";
  $pdo = conexion();

  $sql = "SELECT empresa FROM proveedores ORDER BY empresa";
  $array = $pdo->query($sql)->fetchAll(PDO::FETCH_COLUMN);

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Solución 1</title>
  <link href="estilos.css" rel="stylesheet">
</head>
<body>
  <h1>Lista de  proveedores</h1>
  <ul class="inex">
    <?php
      foreach ($array as $item):
        echo "<li>".htmlspecialchars($item)."</li>\n";
      endforeach;
    ?>
  </ul>
</body>
</html>
