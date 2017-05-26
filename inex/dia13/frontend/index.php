<?php // index.php

  //=============================================
  // ENCABEZADO DE PÁGINA

  $title = "Thor";
  $keywords = "thor, alimento, comida, catálogo";
  $description = "Catálogo de productos alimenticios de primera calidad"; // 150 carácteres
  $extra = '<link rel="stylesheet" href="mod/slider/styles.css">';
  $include = "mod/slider/include.php";
  include "template/head.php";

  //=============================================
  // CUERPO DE PÁGINA

  require_once "lib/productos.php";
  $tabla = obtenerProductosDestacados();
  echo "<h1>Productos destacados</h1>";
  include "inc/productos.php";

  //=============================================
  // PIE DE PÁGINA

  include "template/foot.php";
