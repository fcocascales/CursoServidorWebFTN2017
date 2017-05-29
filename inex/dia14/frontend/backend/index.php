<?php
  //=============================================
  // ENCABEZADO

  $title = "Inicio";
  $extra = "";
  $include = "";
  include "template/head.php";

  //=============================================
  // CUERPO

  echo "<h1>¡Hola $_SESSION[usuario_nombre]!</h1>";

  

  //=============================================
  // PIE

  include "template/foot.php";
