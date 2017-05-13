<?php

  function getFormContacto() {
    $contacto = isset($_POST['contacto'])? $_POST['contacto'] : '';
    $contacto = strip_tags($contacto);
    $contacto = substr($contacto, 0, 20);
    return $contacto;
  }
  function getFormProducto() {
    $producto = isset($_POST['producto'])? $_POST['producto'] : '';
    $producto = strip_tags($producto);
    $producto = substr($producto, 0, 20);
    return $producto;
  }
  function getFormCantidad() {
    $cantidad = isset($_POST['cantidad'])? $_POST['cantidad'] : '';
    $cantidad = floatval($cantidad);
    return $cantidad;
  }

  // Quiero saber la cantidad de plátano
  require_once "TablaAlmacen.php";

  $nombre = getFormProducto();
  $cantidadPedida = getFormCantidad();
  $item = buscarProductoEnAlmacen($nombre);

  if ($item['cantidad'] < $cantidadPedida) {
    $mensaje = "No hay suficiente cantidad en el almacen";
  } else {
    $importe = $item['precio'] * $cantidadPedida;
    $mensaje = "Importe de la compra: $importe euros";
    $item['cantidad'] = $item['cantidad'] - $cantidadPedida;
  }

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Comprar</title>
</head>
<body>
<h1>Comprar</h1>
<p>
  <?php echo getFormContacto() ?> está intentando comprar
  <?php echo getFormCantidad() ?> kilos de
  <?php echo getFormProducto() ?>.
</p>
<p><?php echo $mensaje; ?>
</p>
</body>
</html>
