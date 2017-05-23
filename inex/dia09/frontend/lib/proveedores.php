<?php // lib/proveedores.php

require_once "conexion.php";

function obtenerProveedores() {
  $sql = "SELECT id, empresa FROM proveedores ORDER BY 2";
  return Conexion::queryAssoc($sql);
}
