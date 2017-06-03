<?php

  //=============================================
  // ENCABEZADO DE PÁGINA

  $title = obtenerTituloPagina()." - Thor";
  $keywords = "thor, alimento, categoría, filtro, ordenación";
  $description = "Categorías de productos alimenticios filtrado y ordenado"; // 150 carácteres
  $extra = '<link rel="stylesheet" href="mod/photocategory/styles.css">';
  $include = "mod/photocategory/include.php";
  include "template/head.php";

  function obtenerTituloPagina() {
    require_once "lib/categorias.php";
    $idActual = obtenerIdCategoriaActual();
    $nombre = obtenerNombreCategoria($idActual);
    return $nombre;
  }

  //=============================================
  // CUERPO DE PÁGINA




  //=============================================
  // PIE DE PÁGINA

  include "template/foot.php";
