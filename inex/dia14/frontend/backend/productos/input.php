<?php
$producto = strip_tags(trim($_POST['producto']));
$precio = floatval($_POST['precio']);
$cantidad = strip_tags(trim($_POST['cantidad']));
$proveedorId = intval($_POST['proveedor_id']);
$categoriaId = intval($_POST['categoria_id']);
$descripcion = strip_tags(trim($_POST['descripcion']));
$destacado = isset($_POST['destacado']);
$activado = isset($_POST['activado']);
