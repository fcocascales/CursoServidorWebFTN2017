<?php

require_once "../classIndex.php";

class Index extends ClassIndex {
	protected $root = 'inex';
	protected $list = array(
		array( // dia1
			'title'=> "PDO y arrays",
			'links'=> array(
				'temario.md'=> "Temario",
				'pdo.md'=> "Repaso de PDO",
				'arrays.php'=> "Arrays indexados y asociativos",
				'tablas.php'=> "Tablas: array indexado de arrays asociativos",
				'ejercicio1.php'=> "Ejercicio de tablas",
			)
		),
		array( // dia2
			'title'=> "Informes de Neptuno con PDO y HTML",
			'links'=> array(
				'app.md'=> "Aplicaciones web",
				'ejercicio2/ejercicio2.md'=> "Informes de Neptuno",
				'ejercicio2/'=> "Solución del ejercicio 2",
				'fetchall.php'=> "Modos de funcionamiento de fetchAll",
				'fetchall.html'=> "Ídem",
			)
		),
	);
}

$index = new Index();

 ?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Implantación de aplicaciones web en entornos internet, intranet y extranet </title>
		<link href="../styles.css" rel="stylesheet">
		<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="../js/index.js"></script>
	</head>
	<body>
		<header>
			<h1>MF0493_3 — Implantación de aplicaciones web en entornos internet, intranet y extranet — 90 horas</h1>
		</header>
		<section>
			<article>
				<ul class="index">
				  <?php $index->printList(); ?>
			 	</ul>
			</article>
		</section>
	</body>
</html>
