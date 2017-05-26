<?php
  //=============================================
  // ENCABEZADO

  $title = "Carrusel";
  $extra = "";
  $include = "";
  $search = false;
  include "../template/head.php";

  //=============================================
  // CUERPO

  echo '<section class="gestor">';
  echo '<div>';
  echo "<h1>Carrusel de la página principal</h1>";
  echo "<p><a href=\"insertar.php\">Insertar un nuevo elemento</a></p>";
  echo '</div>';

  echo '</section>';

  //=============================================
  // PIE

  include "../template/foot.php";
