<?php
  require_once "conexion.php";
  $pdo = conexion();

  $sql = "SELECT empresa FROM clientes WHERE pais='alemania' ORDER BY empresa";
  $array = $pdo->query($sql)->fetchAll(PDO::FETCH_COLUMN);

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Solución 3</title>
  <link href="estilos.css" rel="stylesheet">
</head>
<body>
  <h1>Clientes de Alemania</h1>
  <ol>
    <?php
      foreach ($array as $item):
        echo "<li>".htmlspecialchars($item)."</li>\n";
      endforeach;
    ?>
  </ol>
</body>
</html>
