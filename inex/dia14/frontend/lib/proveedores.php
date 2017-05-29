<?php // lib/proveedores.php

require_once "conexion.php";

function obtenerProveedores() {
  $sql = "SELECT id, empresa FROM proveedores ORDER BY 2";
  return Conexion::queryAssoc($sql);
}

function obtenerProveedoresPorCategoria($id) {
  $sql = "SELECT DISTINCT r.id, r.empresa
    FROM proveedores r
      INNER JOIN productos p ON r.id = p.proveedor_id
    WHERE ? IN (0, p.categoria_id)
    ORDER BY 2 ";
  return Conexion::queryAssoc($sql, $id);
}
