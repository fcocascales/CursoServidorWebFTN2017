<?php
  require_once "conexion.php";
  $pdo = conexion();

  $sql = "SELECT c.categoria, p.producto, p.precio_unidad AS precio
   FROM productos p
    INNER JOIN categorias c ON p.categoria_id = c.id
   ORDER BY c.categoria, p.producto";
  $table = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

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
    $categoriaAnterior = "";
    foreach ($table as $row) {
      if ($row['categoria'] != $categoriaAnterior) {
        if ($categoriaAnterior != "") echo "</ul>\n";
        echo "<h2>".htmlspecialchars($row['categoria'])."</h2>\n";
        echo "<ul>\n";
        $categoriaAnterior = $row['categoria'];
      }
      echo "<li>";
      echo "<strong>".htmlspecialchars($row['producto'])."</strong>";
      echo " &mdash; ".number_format($row['precio'], 2, ",", "."). " €";
      echo "</li>\n";
    }
    if ($categoriaAnterior != "") echo "</ul>";
  ?>
</body>
</html>
