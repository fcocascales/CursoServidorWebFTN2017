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

  echo '<section class="gestor">';
  echo '<div>';
  echo "<h1>Categorías de productos</h1>";
  echo "<p><a href=\"insertar.php\">Insertar una nueva categoría</a></p>";
  echo '</div>';

  echo '</section>';

  //=============================================
  // PIE

  include "../template/foot.php";
