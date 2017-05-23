<?php

class Template {

const TITLE = "Thor el dios del trueno";

public static $keywords = "";
public static $description = "";
public static $title = "";
public static $extra = "";
public static $include = "";

//---------------------------------------------

public static function head() {
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="<?php echo self::$keywords ?>">
  <meta name="description" content="<?php echo self::$description ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo self::$title ?></title>
  <link rel="stylesheet" href="css/frontend.css">
  <link rel="stylesheet" href="mod/fa/css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/frontend.js"></script>
  <?php if (!empty(self::$extra)) echo self::$extra; ?>
</head>
<body>
<div id="page">
<header id="pageheader">
  <section id="super">
    <a href=".">
      <img id="logo" src="img/logo.png" width="64" height="64">
    </a>
    <h1 id="title">
      <a href="."><?php echo self::TITLE; ?></a>
    </h1>
    <form id="search" action="busca.php" method="get">
      <input type="text" name="busca">
      <button>Buscar</button>
    </form>
  </section>
  <?php
    if (!empty(self::$include)) include self::$include;
  ?>
  <nav id="navigator">
    <div id="toggle_nav"><span>≡</span>Menú</div>
    <?php self::printNavigatorCategories() ?>
  </nav>
</header>
<main id="pagemain"><?php }

//---------------------------------------------

public static function foot() {
?></main>
<footer id="pagefooter">
  <nav id="menu">
    <ul>
      <li><a href="#">Últimas noticias</a></li>
      <li><a href="#">Formulario de contacto</a></li>
      <li><a href="#">Dónde encontrarnos</a></li>
      <li><a href="#">Respuestas a preguntas frecuentes</a></li>
    </ul>
  </nav>
  <nav id="social">
    <ul>
      <li><a id="facebook"  href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
      <li><a id="twitter"   href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
      <li><a id="pinterest" href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
      <li><a id="instagram" href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
      <li><a id="youtube"   href="#"><i class="fa fa-youtube-play"></i> YouTube</a></li>
      <li><a id="linkedin"  href="#"><i class="fa fa-linkedin-square"></i> LinkedIn</a></li>
      <li><a id="feed"      href="#"><i class="fa fa-rss"></i> Feed</a></li>
    </ul>
  </nav>
</footer>
</div>
</body>
</html><?php }

//---------------------------------------------

private static function printNavigatorCategories() {
	require_once "lib/Category.php";
	$currentId = CurrentCategory::getId();
	echo "<ul>\n";
	foreach (Category::assoc() as $id=>$nombre) {
		$class = ($id == $currentId)? ' class="actual"' : '';
		echo "\t\t\t<li><a href=\"categoria.php?id=$id\"$class>$nombre</a></li>\n";
	}
	echo "\t\t</ul>\n";
}

} // class
