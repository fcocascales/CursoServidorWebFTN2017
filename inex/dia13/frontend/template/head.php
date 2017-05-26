<?php // template/head.php

  function imprimirNavegadorCategorias() {
    require_once "lib/categorias.php";
    $idActual = obtenerIdCategoriaActual();
    echo "<ul>\n";
    foreach (obtenerCategorias() as $id=>$nombre) {
      $class = ($id == $idActual)? ' class="actual"' : '';
      echo "\t\t\t<li><a href=\"categoria.php?id=$id&proveedor=\"$class>$nombre</a></li>\n";
    }
    echo "\t\t</ul>\n";
  }

?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="<?php echo $keywords ?>">
  <meta name="description" content="<?php echo $description ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="mod/fa/css/font-awesome.min.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/frontend.js"></script>
  <?php
    if (!empty($extra)) echo $extra;
  ?>
</head>
<body>
  <div id="page">
    <header id="pageheader">
      <section id="super">
        <a href=".">
          <img id="logo" src="img/logo.png" width="64" height="64">
        </a>
        <h1 id="title">
          <a href=".">Thor el dios del trueno</a>
        </h1>
        <form id="search" action="buscador.php" method="get">
          <input type="text" name="busqueda">
          <button><i class="fa fa-search"></i> Buscar</button>
        </form>
      </section>
      <?php
        if (!empty($include)) include $include;
      ?>
      <nav id="navigator">
        <div id="toggle_nav"><i class="fa fa-bars"></i> Menú</div>
        <?php imprimirNavegadorCategorias() ?>
      </nav>
    </header>
    <main id="pagemain">
