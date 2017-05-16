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
				'ejercicio2.md'=> "Ejercicio de informes de Neptuno",
				'fetchall.php'=> "Modos de funcionamiento de fetchAll",
				'fetchall.html'=> "Ídem",
			)
		),
		array( // dia3
			'title'=> "Informes de Neptuno con PDO y HTML",
			'links'=> array(
				'ejercicio2/ejercicio2.md'=> "Informes de Neptuno",
				'ejercicio2/'=> "Solución del ejercicio 2",
			)
		),
		array( // dia4
			'title'=> "Paginación",
			'links'=> array(
				'paginacion/paginacion.md'=> "Apuntes sobre paginación",
				'paginacion/clientes.md'=> "Ejercicio de paginación de clientes",
				'paginacion/clientes.php'=> "Solución del ejercicio",
			)
		),
		array( // dia5
			'title'=> "Paginación con filtros",
			'links'=> array(
				'paginacion2/paginacion2.md'=> "Apuntes de paginación 2",
				'paginacion2/prueba.php'=> "Prueba de SQL_CALC_FOUND_ROWS",
				'paginacion2/productos.md'=> "Ejercicio de paginación de productos con filtro",
				'paginacion2/productos.php'=> "Solución del ejercicio",
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
