<?php
  if ( ! isset($titulo)) {
    $titulo = "Sin título";
  }
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $titulo ?></title>
  <link href="estilos.css" rel="stylesheet" />
</head>
<body>
  <h1>Sitio web con plantilla</h1>
  <?php include "menu.php" ?>
  <div id="contenido">
