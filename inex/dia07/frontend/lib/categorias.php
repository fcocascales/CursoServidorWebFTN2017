<?php

  require_once "conexion.php";

  /*
    id => nombre
    1 => Bebidas
    2 => Carnes
    etc...
  */
  function obtenerCategorias() {
    $pdo = conexion();
    $sql = "SELECT id, categoria FROM categorias ORDER BY 2";
    $result = $pdo->query($sql);
    $array = $result->fetchAll(PDO::FETCH_KEY_PAIR);
    return $array;
  }
