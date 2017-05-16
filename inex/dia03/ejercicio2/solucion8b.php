<?php
  require_once "conexion.php";
  require_once "funciones.php";

  $pdo = conexion();
  $idPedido = 11000;

  // Datos del encabezado del pedido (una fila)
  $sql1 = "SELECT p.id,
    c.empresa AS cliente,
    CONCAT_WS(' ', e.nombre, e.apellidos) AS empleado,
    p.fecha_pedido, v.empresa AS envio, p.cargo
  FROM pedidos p
    LEFT JOIN clientes c ON p.cliente_id = c.id
    LEFT JOIN empleados e ON p.empleado_id = e.id
    LEFT JOIN envios v ON p.envio_id = v.id
  WHERE p.id = ?";

  // Datos del detalle del pedido (varias filas)
  $sql2 = "SELECT r.producto, d.precio_unidad, d.cantidad,
    (d.precio_unidad * d.cantidad * 1-d.descuento) AS importe
  FROM detalles d
    LEFT JOIN productos r ON d.producto_id = r.id
  WHERE d.pedido_id = ?";

  $result1 = $pdo->prepare($sql1); // Prepara el SQL para ser ejecutado
  $result1->execute(array($idPedido)); // Sustituye el ? por idPedido
  $row1 = $result1->fetch(PDO::FETCH_ASSOC); // Recuperar la 1ª fila

  $result2 = $pdo->prepare($sql2);
  $result2->execute(array($idPedido));
  $tabla2 = $result2->fetchAll(PDO::FETCH_ASSOC); // Recuperar todas las filas

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Solución 8</title>
  <link href="estilos.css" rel="stylesheet">
</head>
<body>
  <?php
    $cliente = htmlspecialchars($row1['cliente']);
    $empleado = htmlspecialchars($row1['empleado']);
    $envio = htmlspecialchars($row1['envio']);
    $fechaPedido = formato_fecha($row1['fecha_pedido']);
    $cargo = number_format($row1['cargo'], 2, ',', '.');

    echo "<h1>Pedido $row1[id]</h1>\n";
    echo "<ul>\n";
    echo "  <li>Cliente: <strong>$cliente</strong></li>\n";
    echo "  <li>Empleado: <strong>$empleado</strong></li>\n";
    echo "  <li>Fecha pedido: <strong>$fechaPedido</strong></li>\n";
    echo "  <li>Cía. envío: <strong>$envio</strong></li>\n";
    echo "  <li>Cargo: <strong>$cargo</strong> €</li>\n";
    echo "</ul>\n";

    echo "<table class=\"inex\">\n";
    echo "<tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Importe</th></tr>\n";
    $total = 0;
    foreach ($tabla2 as $row) {
        $producto = htmlspecialchars($row['producto']);
        $precio = number_format($row['precio_unidad'], 2, ',', '.');
        $cantidad = number_format($row['cantidad'], 0, ',', '.');
        $importe = number_format($row['importe'], 2, ',', '.');
        echo "<tr>";
        echo "<td>$producto</td><td>$precio €</td>";
        echo "<td>$cantidad</td><td>$importe €</td>";
        echo "</tr>";
        $total = $total + $row['importe'];
    }
    echo "</table>\n";

    $totalFormateado = number_format($total, 2, ',', '.');
    echo "<p>Total de importes: <strong>$totalFormateado</strong></p>";

  ?>
</body>
</html>
