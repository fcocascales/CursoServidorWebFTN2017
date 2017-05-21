<?php

  //=============================================
  // ENCABEZADO DE PÁGINA

  require_once "template/Template.php";
  Template::$title = "Thor";
  Template::$keywords = "thor, alimento, comida, catálogo";
  Template::$description = "Catálogo de productos alimenticios de primera calidad"; // 150 carácteres
  Template::$extra = '<link rel="stylesheet" href="mod/slider/styles.css">';
  Template::$include = "mod/slider/include.php";
  Template::head();

  //=============================================
  // CUERPO DE PÁGINA




  //=============================================
  // PIE DE PÁGINA

  Template::foot();
?>
