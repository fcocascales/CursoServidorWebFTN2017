<?php
  //=============================================
  // ENCABEZADO

  $title = "Insertando categoría";
  $extra = "";
  $include = "";
  $search = false;
  include "../template/head.php";

  //=============================================
  // CUERPO

  require_once "../../lib/conexion.php";
  require_once "funciones.php";

  try {
    include "input.php"; // Obtener las variables del $_POST

    $sql = "INSERT INTO categorias (categoria,
      descripcion, activado)
      VALUES (?, ?, ?)";

    $id = Conexion::insertRow($sql, $categoria,
      $descripcion, $activado);

    subirFoto($id);
    $foto = rutaFoto($id);

    echo "<h1>Insertado <strong>$categoria</strong> en la BD</h1>";
    echo "<p><img src=\"$foto\" width=\"800\" height=\"200\"></p>";
    echo "<p><a href=\"insertar.php\">";
    echo   "<i class=\"fa fa-plus-circle\"></i>";
    echo   " Insertar un nueva categoría</a></p>";
  }
  catch (Exception $ex) {
    echo "<h1>Error al insertar</h1>";
    echo "<p class=\"error\">". $ex->getMessage()."</p>";
  }

  //=============================================
  // PIE

  include "../template/foot.php";
