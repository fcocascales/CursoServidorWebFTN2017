<?php
  //=============================================
  // ENCABEZADO

  $title = "Categorías";
  $extra = "";
  $include = "";
  $search = false;
  include "../template/head.php";

  //=============================================
  // CUERPO

  require_once "../lib/gestor_contenidos.php";
  require_once "../../lib/conexion.php";

  $sql = "SELECT * FROM categorias ORDER BY categoria";
  $tabla = Conexion::queryTable($sql);

  echo '<section class="gestor">';
  echo '<div>';
  echo "<h1>Gestor de $title</h1>";
  echo "<p><a href=\"insertar.php\">";
  echo   "<i class=\"fa fa-plus-circle\"></i>";
  echo   " Insertar una nueva categoría</a></p>";
  echo '</div>';
  imprimirTablaGestorContenidos($tabla);
  echo '</section>';

  //=============================================
  // PIE

  include "../template/foot.php";
