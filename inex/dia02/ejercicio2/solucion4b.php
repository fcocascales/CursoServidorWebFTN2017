<?php
  require_once "conexion.php";
  $pdo = conexion();

  $sql = "SELECT c.categoria, p.producto, p.precio_unidad AS precio
   FROM productos p
    INNER JOIN categorias c ON p.categoria_id = c.id
   ORDER BY c.categoria, p.producto";
  $assoc = $pdo->query($sql)->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC);

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Solución 4</title>
  <link href="estilos.css" rel="stylesheet">
</head>
<body>
  <h1>Categorías y productos</h1>
  <?php
    foreach ($assoc as $categoria=>$table) {
      echo "<h2>".htmlspecialchars($categoria)."</h2>\n";
      echo "<ul>\n";
      foreach ($table as $row) {
        echo "<li>";
        echo "<strong>".htmlspecialchars($row['producto'])."</strong>";
        echo " &mdash; ".number_format($row['precio'], 2, ",", "."). " €";
        echo "</li>\n";
      }
      echo "</ul>\n";
    }
  ?>
</body>
</html>
