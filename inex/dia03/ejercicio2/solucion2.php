<?php
  require_once "conexion.php";
  $pdo = conexion();

  $sql = "SELECT nombre, apellidos, cargo FROM empleados ORDER BY nombre";
  $result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Solución 2</title>
  <link href="estilos.css" rel="stylesheet">
</head>
<body>
  <h1>Tabla de empleados</h1>
  <table class="inex">
    <tr><th>Nombre</th><th>Apellidos</th><th>Cargo</th></tr>
    <?php
      foreach ($result as $row):
        echo "<tr>";
        echo "<td>".htmlspecialchars($row['nombre'])."</td>";
        echo "<td>".htmlspecialchars($row['apellidos'])."</td>";
        echo "<td>".htmlspecialchars($row['cargo'])."</td>";
        echo "</tr>";
      endforeach;
    ?>
  </table>
</body>
</html>
