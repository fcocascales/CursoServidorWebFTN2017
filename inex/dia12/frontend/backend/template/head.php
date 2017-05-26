<?php // backend/template/head.php

  // Autorización: comprobar que se haya logeado
  session_start();
  $raiz = raizFrontend();
  if (empty($_SESSION['usuario_id'])) {
    header("Location: {$raiz}backend/login.php");
    exit;
  }

  function raizFrontend() {
    $ruta = $_SERVER['PHP_SELF'];
    $busca = "backend/";
    $pos = strrpos($ruta, $busca);
    $ruta = substr($ruta, 0, $pos);
    return $ruta;
  }

?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="<?php echo $raiz ?>backend/css/styles.css">
  <link rel="stylesheet" href="<?php echo $raiz ?>mod/fa/css/font-awesome.min.css">
  <script type="text/javascript" src="<?php echo $raiz ?>js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo $raiz ?>backend/js/backend.js"></script>
  <?php
    if (!empty($extra)) echo $extra;
  ?>
</head>
<body>
  <div id="page">
    <header id="pageheader">
      <section id="super">
        <div id="title">
          <a href="..">
            <img id="logo" src="<?php echo $raiz ?>backend/img/logo.png" width="32" height="32">
          </a>
          <h1>
            <a href="..">Backend de Thor</a>
          </h1>
        </div>
        <?php if (!empty($search)): ?>
          <form id="search" action="" method="get">
            <input type="text" name="busqueda">
            <button>Buscar</button>
          </form>
        <?php endif; ?>
        <div id="user">
          <strong><?php echo $_SESSION['usuario_nombre'] ?></strong>
          <a href="<?php echo $raiz ?>backend/logout.php">Desconectar</a>
        </div>
      </section>
      <?php
        if (!empty($include)) include $include;
      ?>
      <nav id="navigator">
        <div id="toggle_nav"><i class="fa fa-bars"></i> Menú</div>
        <ul>
          <li><a href="<?php echo $raiz ?>backend/index.php">Inicio</a></li>
          <li><a href="<?php echo $raiz ?>backend/productos/">Productos</a></li>
          <li><a href="<?php echo $raiz ?>backend/categorias/">Categorías</a></li>
          <li><a href="<?php echo $raiz ?>backend/slider/">Slider</a></li>
          <li><a href="<?php echo $raiz ?>backend/faq/">FAQ</a></li>
        </ul>
      </nav>
    </header>
    <main id="pagemain">
