<?php

  if (!isset($titulo)) $titulo = "";

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $titulo ?></title>
<link href="css/estilos.css" rel="stylesheet">
</head>
<body>
<div id="all">
<header id="header">
  <img src="img/logo.png">
  <h1>Título de la web</h1>
  <h2>Lema</h2>
</header>
<?php include "nav.php"; ?>
<main id="main">
