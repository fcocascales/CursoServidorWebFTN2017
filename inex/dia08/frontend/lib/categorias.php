<?php

require_once "conexion.php";

/*
  id => nombre
  1 => Bebidas
  2 => Carnes
  ...
*/
function obtenerCategorias(/*$pdo*/) {
  $pdo = conexion();
  $sql = "SELECT id, categoria FROM categorias ORDER BY 2";
  $result = $pdo->query($sql);
  $array = $result->fetchAll(PDO::FETCH_KEY_PAIR);
  return $array;
}

function obtenerIdCategoriaActual() {
  $paginaActual = basename($_SERVER['PHP_SELF']);
  if ($paginaActual == 'categoria.php') {
    return isset($_GET['id'])? intval($_GET['id']) : 0;
  }
  else return 0; // No hay categoria actual porque estoy en otra página
}

function obtenerDescripcionCategoria($id) {
  $sql = "SELECT descripcion FROM categorias WHERE id = ?";
  return buscarValor($sql, $id);
}
function obtenerNombreCategoria($id) {
  $sql = "SELECT categoria FROM categorias WHERE id = ?";
  return buscarValor($sql, $id);
}
function buscarValor($sql, $id) {
  $pdo = conexion();
  $result = $pdo->prepare($sql);
  $result->execute(array($id));
  $row = $result->fetch(PDO::FETCH_NUM);
  return $row[0];
}
