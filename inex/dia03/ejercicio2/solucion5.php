<?php
  require_once "conexion.php";
  $pdo = conexion();

  $sql = "SELECT pais, codigo, empresa, contacto
   FROM clientes ORDER BY pais, codigo";
  $assoc = $pdo->query($sql)->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC);

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Solución 5</title>
  <link href="estilos.css" rel="stylesheet">
</head>
<body>
  <?php //echo "<pre>"; print_r($assoc); echo "</pre>"; ?>
  <h1>Clientes por país</h1>
  <?php
    foreach ($assoc as $pais=>$table) {
      echo "<h2>".htmlspecialchars($pais)."</h2>\n";
      echo "<table class=\"inex\">\n";
      echo "<tr><th>Código</th><th>Empresa</th><th>Contacto</th></tr>";
      foreach ($table as $row) {
        echo "<tr>";
        foreach($row as $value) {
          echo "<td>".htmlspecialchars($value)."</td>";
        }
        echo "</tr>\n";
      }
      echo "</table>\n";
    }
  ?>
</body>
</html>
