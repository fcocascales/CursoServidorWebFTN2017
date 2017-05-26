<?php
  //=============================================
  // ENCABEZADO

  $title = "Insertando producto";
  $extra = "";
  $include = "";
  $search = false;
  include "../template/head.php";

  //=============================================
  // CUERPO

  require_once "../../lib/conexion.php";
  require_once "funciones.php";

  /*echo "<pre>"; print_r($_POST); print_r($_FILES); echo "</pre>";*/

  try {
    include "input.php"; // Obtener las variables del $_POST

    $sql = "INSERT INTO productos (producto, precio_unidad,
      cantidad_por_unidad, proveedor_id, categoria_id,
      descripcion, destacado, activado)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $id = Conexion::insertRow($sql, $producto, $precio,
      $cantidad, $proveedorId, $categoriaId, $descripcion,
      $destacado, $activado);

    subirFoto($id);
    $foto = rutaFoto($id);

    echo "<h1>Insertado <strong>$producto</strong> en la BD</h1>";
    echo "<p><img src=\"$foto\" width=\"320\" height=\"240\"></p>";
    echo "<p><a href=\"insertar.php\">";
    echo   "<i class=\"fa fa-plus-circle\"></i>";
    echo   " Insertar un nuevo producto</a></p>";
  }
  catch (Exception $ex) {
    echo "<h1>Error al insertar</h1>";
    echo "<p class=\"error\">". $ex->getMessage()."</p>";
  }

  //=============================================
  // PIE

  include "../template/foot.php";
