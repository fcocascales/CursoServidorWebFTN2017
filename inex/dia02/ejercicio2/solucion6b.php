<?php
  require_once "conexion.php";
  $pdo = conexion();

  $sql1 = "SELECT DISTINCT YEAR(fecha_pedido) FROM pedidos ORDER BY 1";
  $sql2 = "SELECT DISTINCT MONTH(fecha_pedido) AS mes, MONTHNAME(fecha_pedido) AS nombre
    FROM pedidos WHERE YEAR(fecha_pedido) = ? ORDER BY MONTH(fecha_pedido)";
  $sql3 = "SELECT p.id, p.fecha_pedido AS fecha,
      SUM(d.cantidad * d.precio_unidad * (1-d.descuento))+p.cargo AS total
    FROM pedidos p
      INNER JOIN detalles d ON p.id = d.pedido_id
    WHERE YEAR(fecha_pedido) = ? AND MONTH(fecha_pedido) = ?
    GROUP BY p.id";
  $pdo->exec("SET LC_TIME_NAMES = 'es_ES' "); // meses en español

  $años = $pdo->query($sql1)->fetchAll(PDO::FETCH_COLUMN);
  $meses = $pdo->prepare($sql2);
  $pedidos = $pdo->prepare($sql3);

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
    foreach ($años as $año) {
      echo "<h2>Año $año</h2>";
      $meses->execute([$año]);
      foreach ($meses as $mes) {
        echo "<h3>".ucfirst($mes['nombre'])." $año</h3>";
        echo "<ul class=\"inex\">";
        $pedidos->execute([$año, $mes['mes']]);
        foreach($pedidos as $row) {
          echo "<li>". $row['id']. " &mdash; ";
          echo $row['fecha']. " &mdash; ";
          echo number_format($row['total'], 2, ",", ".")." €</li>\n";
        }
        echo "</ul>";
      }
    }
  ?>
</body>
</html>
