<?php // cookie3.php
/*
  - En "cookie3.php" mostraremos una lista
    de colores a elegir. El color elegido
    se guardará en una cookie. La cookie
    caducará al cabo de 2 meses.
    Pon un enlace a la página "cookie4.php"
  - El color de fondo de "cookie4.php"
    vendrá determinado por la cookie.
*/

    if (isset($_GET['color'])) {
      $color = strip_tags($_GET['color']);
      $caducaEn60dias = time()+3600*24*30*2;
      setcookie('color', $color, $caducaEn60dias);
    }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Color</title>
</head>
<body>
  <h1>Guardar preferencias</h1>
  <h2>Elige tu color preferido</h2>
  <ul>
    <li><a href="?color=red">Rojo</a></li>
    <li><a href="?color=pink">Rosa</a></li>
    <li><a href="?color=orange">Naranja</a></li>
    <li><a href="?color=purple">Violeta</a></li>
    <li><a href="?color=cyan">Celeste</a></li>
    <li><a href="?color=gold">Oro</a></li>
    <li><a href="?color=khaki">Caqui</a></li>
    <li><a href="?color=brown">Marrón</a></li>
  </ul>
  <p>
    <a href="cookie4.php">Ver color elegido</a>
  </p>
</body>
</html>
