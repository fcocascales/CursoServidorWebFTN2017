<?php
  require_once "conexion.php";
  require_once "funciones.php";

  $pdo = conexion();
  $idPedido = 11000;
  $sql = "SELECT p.id,
    c.empresa AS cliente,
    CONCAT_WS(' ', e.nombre, e.apellidos) AS empleado,
    p.fecha_pedido, p.fecha_entrega, p.fecha_envio,
    v.empresa AS envio, p.cargo
  FROM pedidos p
    LEFT JOIN clientes c ON p.cliente_id = c.id
    LEFT JOIN empleados e ON p.empleado_id = e.id
    LEFT JOIN envios v ON p.envio_id = v.id
  WHERE p.id = ?";

  $result = $pdo->prepare($sql); // Prepara el SQL para ser ejecutado
  $result->execute(array($idPedido)); // Sustituye el ? por idPedido
  $row = $result->fetch(PDO::FETCH_ASSOC); // Recuperar la 1ª fila del resultado

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Solución 7</title>
  <link href="estilos.css" rel="stylesheet">
</head>
<body>
  <?php
    $cargo = number_format($row['cargo'], 2, ',', '.');
    $fechaPedido = formato_fecha($row['fecha_pedido']);
    $fechaEntrega = formato_fecha($row['fecha_entrega']);
    $fechaEnvio = formato_fecha($row['fecha_envio']);
    $cliente = htmlspecialchars($row['cliente']);
    $empleado = htmlspecialchars($row['empleado']);
    $envio = htmlspecialchars($row['envio']);

    echo "<h1>Pedido $row[id]</h1>\n";
    echo "<ul>\n";
    echo "  <li>Cliente: <strong>$cliente</strong></li>\n";
    echo "  <li>Empleado: <strong>$empleado</strong></li>\n";
    echo "  <li>Fecha pedido: <strong>$fechaPedido</strong></li>\n";
    echo "  <li>Fecha envío: <strong>$fechaEnvio</strong></li>\n";
    echo "  <li>Fecha entrega: <strong>$fechaEntrega</strong></li>\n";
    echo "  <li>Cía. envío: <strong>$envio</strong></li>\n";
    echo "  <li>Cargo: <strong>$cargo</strong> €</li>\n";
    echo "</ul>\n";
  ?>
</body>
</html>
