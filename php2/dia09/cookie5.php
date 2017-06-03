<?php // cookie5.php

  /*
    Dar a elegir entre 3 fotos
    del tema que se quiera

    Mostrar la foto elegida

    Recordar la foto elegida
    guardandola en una cookie

    <img src="foto1.jpg">
  */

  $foto = "";

  if (isset($_GET['foto'])) {
    $foto = strip_tags($_GET['foto']);
    $unaSemana = time()+3600*24*7;
    setcookie('foto', $foto, $unaSemana);
  }
  elseif (isset($_COOKIE['foto'])) {
    $foto = strip_tags($_COOKIE['foto']);
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Foto</title>
</head>
<body>
  <h1>Elige el animal que más te guste</h1>
  <p>
    <img src="img/<?php echo $foto ?>.jpg" width="640" height="480">
  </p>
  <p>
    <a href="?foto=gato">
      <img src="img/mini_gato.jpg" width="128" height="96">
    </a>
    <a href="?foto=pez">
      <img src="img/mini_pez.jpg" width="128" height="96">
    </a>
    <a href="?foto=cotorra">
      <img src="img/mini_cotorra.jpg" width="128" height="96">
    </a>
  </p>
  <p>
    <a href="cookie5.php">Refrescar la página</a>
  </p>
</body>
</html>
