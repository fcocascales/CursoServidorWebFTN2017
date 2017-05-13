<?php
  require_once "locale.php";
  Locale::set();
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo _('Sitio web') ?></title>
</head>
<body>
<div>
  <a href="?lang=ca">Català</a> |
  <a href="?lang=en">English</a> |
  <a href="?lang=es">Español</a>
</div>
<h1><?php echo _('Página de inicio') ?></h1>
<p><?php echo _('Ésta es mi primera traducción') ?></p>
<p><?php echo _('Curso web') ?></p>
<p><?php echo _('Prueba de añadir texto nuevo') ?>
<p><a href="dos.php"><?php echo _('Página dos') ?></a></p> 
</body>
</html>
