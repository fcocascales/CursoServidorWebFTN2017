<?php
  include "traducciones.php";

  $lang = seleccionarIdioma();

?><!DOCTYPE html>
<html lang="<?php echo $lang ?>">
  <head>
    <meta charset="utf-8">
    <title><?php echo _("Last news") ?></title>
  </head>
  <body>
    <p><?php mostrarBanderas(); ?><p>
    <h1><?php echo _("Last news") ?></h1>
    <h2><?php echo _("Two arrested for 12 'landings' in the Vallès") ?></h2>
    <p><?php echo _("The thieves crashed vehicles they had stolen from shop windows") ?></p>
  </body>
</html>
