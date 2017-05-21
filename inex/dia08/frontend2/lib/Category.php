<?php

require_once "DB.php";

class Category {

  public static function assoc() {
    $sql = "SELECT id, categoria FROM categorias ORDER BY 2";
    return DB::queryAssoc($sql);
  }

  /*public static function currentId() {
    $paginaActual = basename($_SERVER['PHP_SELF']);
    if ($paginaActual == 'categoria.php') {
      return isset($_GET['id'])? intval($_GET['id']) : 0;
    }
    else return 0; // No hay categoria actual porque estoy en otra página
  }*/

  public static function getDescription($id) {
    $sql = "SELECT descripcion FROM categorias WHERE id = ?";
    return DB::queryValue($sql, $id);
  }
  public static function getName($id) {
    $sql = "SELECT categoria FROM categorias WHERE id = ?";
    return DB::queryValue($sql, $id);
  }

  /*public static function currentDescription() {
    $sql = "SELECT descripcion FROM categorias WHERE id = ?";
    return DB::queryValue($sql, self::currentId());
  }
  public static function currentName() {
    $sql = "SELECT categoria FROM categorias WHERE id = ?";
    return DB::queryValue($sql, self::currentId());
  }*/

}

class CurrentCategory {
  public static function getId() {
    $paginaActual = basename($_SERVER['PHP_SELF']);
    if ($paginaActual == 'categoria.php') {
      return isset($_GET['id'])? intval($_GET['id']) : 0;
    }
    else return 0; // No hay categoria actual porque estoy en otra página
  }
  public static function getDescription() {
    return Category::getDescription(self::getId());
  }
  public static function getName() {
    return Category::getName(self::getId());
  }
}
