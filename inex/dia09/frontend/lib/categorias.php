<?php // lib/categorias.php

require_once "conexion.php";

/*
  id => nombre
  1 => Bebidas
  2 => Carnes
  ...
*/
function obtenerCategorias() {
  $sql = "SELECT id, categoria FROM categorias ORDER BY 2";
  return Conexion::queryAssoc($sql);
}

/*
  $_SERVER['PHP_SELF'] --> La página "/inex/dia09/frontend/categoria.php"
  basename(...) --> "categoria.php"
*/
function obtenerIdCategoriaActual() {
  $paginaActual = basename($_SERVER['PHP_SELF']);
  if ($paginaActual == 'categoria.php') {
    return isset($_GET['id'])? intval($_GET['id']) : 0;
  }
  else return 0; // No hay categoria actual porque estoy en otra página
}

function obtenerDescripcionCategoria($id) {
  $sql = "SELECT descripcion FROM categorias WHERE id = ?";
  return Conexion::queryValue($sql, $id);
}
function obtenerNombreCategoria($id) {
  $sql = "SELECT categoria FROM categorias WHERE id = ?";
  return Conexion::queryValue($sql, $id);
}
