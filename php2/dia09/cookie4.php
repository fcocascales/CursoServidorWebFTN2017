<?php

  if (isset($_COOKIE['color'])) {
    $color = $_COOKIE['color'];
  } else {
    $color = 'white';
  }

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookie 4</title>
    <style>
      body { background-color: <?php echo $color ?>; }
    </style>
  </head>
  <body>
    <h1>Página personal</h1>
    <p>Puedes
      <a href="cookie3.php">cambiar el color</a>
      de esta página</p>
  </body>
</html>
