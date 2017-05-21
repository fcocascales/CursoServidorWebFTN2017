<?php

  //=============================================
  // ENCABEZADO DE PÁGINA

  require_once "template/Template.php";
  require_once "lib/Category.php";

  Template::$title = CurrentCategory::getName()." - Thor";
  Template::$keywords = "thor, alimento, categoría, filtro, ordenación";
  Template::$description = "Categorías de productos alimenticios filtrado y ordenado"; // 150 carácteres
  Template::$extra = '<link rel="stylesheet" href="mod/photocategory/styles.css">';
  Template::$include = "mod/photocategory/include.php";
  Template::head();

  //=============================================
  // CUERPO DE PÁGINA




  //=============================================
  // PIE DE PÁGINA

  Template::foot();
?>
