<?php

require_once "../classIndex.php";

class Index extends ClassIndex {
	protected $root = 'api';
	protected $list = array(
		array( // dia1
			'title'=> "Datos en formato JSON y XML",
			'links'=> array(
				'temario.md'=> "Temario",
				'api.md'=> "Apuntes sobre JSON y XML",
				'ejercicio1/ejercicio1.md'=> "Ejercicio de convertir a JSON y XML",
				'ejercicio2/ejercicio2.php'=> "Ejercicio convertir array PHP a JSON y XML",
				'ejercicio3/ejercicio3.php'=> "Ejercicio código PHP para convertir a JSON y XML",
			)
		),
		array( // dia2
			'title'=> "Convertir formatos de datos JSON y XML",
			'links'=> array(
				'ejercicio4/ejercicio4.md'=> "Crear una factura XML o JSON",
				'ejercicio4/'=> "Solución del ejercicio 4",
				'ejercicio5/ejercicio5.md'=> "Leer una factura XML o JSON",
				'ejercicio5/'=> "Solución del ejercicio 5",
			)
		),
		array( // dia3
			'title'=> "Extraer datos de JSON y XML",
			'links'=> array(
				'ejercicio6/ejercicio6.md'=> "Ejercicio de extraer temperaturas de un XML",
				'ejercicio6/'=> "Solución del ejercicio 6",
				'ejercicio7/ejercicio7.md'=> "Ejercicio de extraer tareas de un JSON",
				'ejercicio7/'=> "Solución del ejercicio 7",
			)
		),
		array( // dia4
			'title'=> "Servicios web",
			'links'=> array(
				'ejercicio8/ejercicio8.md'=> "Obtener XML de la web tutiempo.net",
				'ejercicio8/'=> "Solución del ejercicio 8",
				'ejercicio9/ejercicio9.md'=> "Obtener el feed de varios blogs",
				'ejercicio9/'=> "Solución del ejercicio 9",
			)
		),
		array( // dia5
			'title'=> "Generar JSON desde la BD de dinosaurios",
			'links'=> array(
				'ejercicio10/enlaces.php'=> "Enviar formulario (sin pulsar el botón de Enviar) con Javascript",
				'ejercicio11/ejercicio11.md'=> "JSON de los dinosaurios",
				'ejercicio11/'=> "Solución del ejercicio 11",
			)
		),
		array( // dia6
			'title'=> "Generar JSON desde la BD de países",
			'links'=> array(
				'ejercicio12/ejercicio12.md'=> "JSON de países del mundo",
				'ejercicio12/'=> "Solución del ejercicio 12",
			)
		),
		array( // dia7
			'title'=> "Consumir JSON de países",
			'links'=> array(
				'ejercicio13/ejercicio13.md'=> "Ficha del país PHP",
				'ejercicio13/'=> "Solución del ejercicio 13",
				'ejercicio14/ejercicio14.md'=> "Ficha del país AJAX",
				'ejercicio14/pais.html'=> "Solución del ejercicio 14",
				'ejercicio14b/pais.html'=> "Solución del ejercicio 14b",
			)
		),
		array( // dia8
			'title'=> "Api web REST",
			'links'=> array(
				'ejercicio15/ejercicio15.md'=> "Empezar un servidor REST",
				'ejercicio15/'=> "Solución del ejercicio 15",
				'ejercicio16/ejercicio16.md'=> "API para el servidor REST",
				'ejercicio16/'=> "Solución del ejercicio 16",
				'jquery.md'=> "Repaso de jQuery",
				'funcion.html'=> "Pasar por parámetro una función en Javascript"
			)
		),
		array( // dia9
			'title'=> "Servidor REST",
			'links'=> array(
				'ejercicio17/ejercicio17.md'=> "Crear un servidor REST",
				'ejercicio17/'=> "Solución del ejercicio 17",
				'tecnologia-web.md'=> "Tecnologías web actuales",
				'ejercicio18/ejercicio18.md'=> "Plantear servidor REST HATEOAS",
			)
		),
		array( // dia10
			'title'=> "Cliente API REST",
			'links'=> array(
				'rest-api.md'=> "Webs que ofrecen API REST",
				'ejercicio19/ejercicio19.md'=> "Geolocalización de una ciudad",
				'ejercicio19/geocode.php'=> "Solución del ejercicio 19",
				'ejercicio20/ejercicio20.md'=> "Un cliente API REST genérico",
				'ejercicio20/test_client.php'=> "Solución del ejercicio 20",
				'ejercicio21/ejercicio21.md'=> "El cliente envía operandos",
				'ejercicio21/test_client.php'=> "Solución del ejercicio 21",
			)
		),
	);
}

$index = new Index();

 ?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Programación web en el entorno servidor</title>
		<link href="../styles.css" rel="stylesheet">
		<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="../js/index.js"></script>
	</head>
	<body>
		<header>
			<h1>Programación web en el entorno servidor</h1>
			<h2>UF1846 — Desarrollo de aplicaciones web distribuidas — 60 horas</h2>
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
