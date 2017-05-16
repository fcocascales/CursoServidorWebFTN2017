<?php
  require_once "conexion.php";
  $pdo = conexion();

  $sql = "SELECT YEAR(p.fecha_pedido) AS año,
      MONTHNAME(p.fecha_pedido) AS mes,
      p.id,
      p.fecha_pedido AS fecha,
      SUM(d.cantidad * d.precio_unidad * (1-d.descuento))+p.cargo AS total
    FROM pedidos p
      INNER JOIN detalles d ON p.id = d.pedido_id
    GROUP BY p.id
    ORDER BY YEAR(p.fecha_pedido), MONTH(p.fecha_pedido), p.id";
  $pdo->exec("SET LC_TIME_NAMES = 'es_ES' "); // meses en español
  $result = $pdo->query($sql);

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Solución 6</title>
  <link href="estilos.css" rel="stylesheet">
</head>
<body>
  <h1>Lista de  proveedores</h1>
  <?php
    $añoAnterior = "";
    $mesAnterior = "";
    foreach ($result as $row) {
      if ($añoAnterior != $row['año']) {
        if ($añoAnterior != "") echo "</ul>";
        $añoAnterior = $row['año'];
        echo "<h2>Año $row[año]</h2>";
        $mesAnterior = "";
      }
      if ($mesAnterior != $row['mes']) {
        if ($mesAnterior != "") echo "</ul>";
        $mesAnterior = $row['mes'];
        echo "<h3>".ucfirst($row['mes'])." ".$row['año']." </h3>";
        echo "<ul class=\"inex\">";
      }
      echo "<li>". $row['id']. " &mdash; ";
      echo $row['fecha']. " &mdash; ";
      echo number_format($row['total'], 2, ",", ".")." €</li>\n";
    }
    if ($añoAnterior != "") echo "</ul>";
  ?>
</body>
</html>
