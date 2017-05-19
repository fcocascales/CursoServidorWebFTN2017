<?php
  require_once "lib/categorias.php";

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="<?php echo $keywords ?>">
  <meta name="description" content="<?php echo $description ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="css/frontend.css">
  <link rel="stylesheet" href="fa/css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/frontend.js"></script>
  <?php
    if (isset($extra)) echo $extra;
  ?>
</head>
<body>
  <div id="page">
    <header id="pageheader">
      <section id="super">
        <img id="logo" src="img/logo.png" width="64" height="64">
        <h1 id="title">Thor el dios del trueno</h1>
        <form id="search" action="busca.php" method="get">
          <input type="text" name="busca">
          <button>Buscar</button>
        </form>
      </section>
      <?php
        if (isset($include)) include $include;
      ?>
      <nav id="navigator">
        <ul>
          <?php
            foreach (obtenerCategorias() as $id=>$nombre) {
              echo "<li><a href=\"categoria.php?id=$id\">$nombre</a></li>";
            }
           ?>
        </ul>
      </nav>
    </header>
    <main id="pagemain">
