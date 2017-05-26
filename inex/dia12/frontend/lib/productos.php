<?php // lib/productos.php

require_once "conexion.php";

function obtenerProductosDestacados() {
  $sql = "SELECT
      p.id,
      p.producto,
      p.precio_unidad AS precio,
      p.cantidad_por_unidad AS cantidad,
      r.empresa AS proveedor,
      c.categoria
    FROM productos p
      LEFT JOIN proveedores r ON p.proveedor_id = r.id
      LEFT JOIN categorias c ON p.categoria_id = c.id
    WHERE p.activado IS TRUE
      AND p.destacado IS TRUE
    ORDER BY p.id DESC";
  return Conexion::queryTable($sql);
}

function obtenerFichaProducto($id) {
  $sql = "SELECT p.*,
      r.empresa AS proveedor,
      c.categoria
    FROM productos p
      LEFT JOIN proveedores r ON p.proveedor_id = r.id
      LEFT JOIN categorias c ON p.categoria_id = c.id
    WHERE p.id = ? ";
  return Conexion::queryRow($sql, $id);
}

function obtenerFotoProducto($id) {
  $image = 'img/productos/'.$id.'.jpg';
  if (!file_exists($image)) $image = 'img/productos/0.png';
  return $image;
}
