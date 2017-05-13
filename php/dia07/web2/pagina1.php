<?php
  include "traducciones.php";
?><!DOCTYPE html>
<html lang="<?php echo $lang ?>">
  <head>
    <meta charset="utf-8">
    <title><?php traducir('pagina1') ?></title>
  </head>
  <body>
    <p><?php mostrarBanderas(); ?><p>
    <h1><?php traducir('pagina1') ?></h1>
    <h2><?php traducir('titulo1') ?></h2>
    <p><?php traducir('noticia1') ?></p>
  </body>
</html>
