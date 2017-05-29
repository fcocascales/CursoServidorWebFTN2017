<?php // backend/productos/proveedores.json.php

/*
  Este fichero es un servidor AJAX
  y se utiliza en "js/backend.js".
*/

require_once "../../lib/conexion.php";

$idCategoria = isset($_GET['id'])? intval($_GET['id']) : 0;

// Copiar este código de "frontend/lib/proveedores.php"
$sql = "SELECT DISTINCT r.id, r.empresa
  FROM proveedores r
    INNER JOIN productos p ON r.id = p.proveedor_id
  WHERE ? IN (0, p.categoria_id)
  ORDER BY 2 ";
$assoc = Conexion::queryAssoc($sql, $idCategoria);

header("Content-Type: application/json");
echo json_encode($assoc);
