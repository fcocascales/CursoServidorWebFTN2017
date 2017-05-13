<?php
require_once "../classIndex.php";

class Index extends ClassIndex {
	protected $root = 'bd';
	protected $list = array(
		array( // dia1
			'title'=> "Introducción a la BD y SQL",
			'links'=> array(
				'basedatos.md'=> "Apuntes de base de datos",
				'mysql.md'=> "Apuntes de MySQL",
				'phpmyadmin.md'=> "Apuntes de phpMyAdmin",
				'bd_uno.sql'=> "Mi primera BD",
				'bd_uno_pma.sql'=> "Exportación de la BD desde phpMyAdmin"
			)
		),
		array( // dia2
			'title'=> "Creación de tablas con SQL",
			'links'=> array(
				'bd_dos.md'=> "Enunciado del ejercicio",
				'bd_dos.sql'=> "Base de datos con la tabla cursos",
				'bd_dos_pma.sql'=> "Exportación de la BD desde phpMyAdmin",
				//'user_dos.sql'=> "Usuario de BD y sus permisos",
			)
		),
		array( // dia3
			'title'=> "Creación de BD y usuarios con SQL. Campos indexados.",
			'links'=> array(
				'bd_tres.md'=> "Enunciado del ejercicio",
				'bd_mesozoico.sql'=> "Base de datos con las tablas dietas y dinosaurios",
				'bd_remota.md'=> "Publicar la BD en el servidor remoto",
				'indices.md'=> "Claves e índices de tabla",
				'bd_tres.sql'=> "Creación de BD, usuarios y permisos",
			)
		),
		array( // dia4
			'title'=> "Creación de BD y usuarios con SQL. Integridad referencial.",
			'links'=> array(
				'bd_cuatro.md'=> "Enunciado del ejercicio",
				'bd_astros.sql'=> "Base de datos con las tablas planetas y satélites",
				'bd_astros_drop.sql'=> "Revocar permisos, borrar BD y usuario",
				'bd_astros_remoto.sql'=> "Adaptar el SQL para el servidor remoto",
				'consultas.sql'=> "Consultas SELECT en bd_astros",
			)
		),
		array( // dia5
			'title'=> "Consultas en SQL y relaciones",
			'links'=> array(
				'ejercicio05.md'=> "Ejercicio de 20 consultas",
				'bd_astros_consultas.sql'=> "Solución del ejercicio",
				'relaciones.md'=> "Relaciones entre tablas",
				'bd_relaciones.sql'=> "Relaciones de consultas en SQL",
				'bd_astros_relaciones.md'=> "Relaciones en bd_astros",
				'bd_astros_relaciones.sql'=> "Relaciones en bd_astros",
			)
		),
		array( // dia6
			'title'=> "Relaciones y agrupamientos",
			'links'=> array(
				'contar.sql'=> "Función de agrupación COUNT",
				'sumar.sql'=> "Otras funciones de agrupación",
				'agrupamiento.sql'=> "La cláusula GROUP BY y HAVING",
				'bd_mundo.sql'=> "BD de países del mundo para importar",
				'bd_mundo_relaciones.png'=> "Relaciones de bd_mundo",
				'bd_mundo_consultas.md'=> "Ejercicio de consultas en bd_mundo",
				'bd_mundo_consultas.sql'=> "Soluciones de consultas en bd_mundo",
			)
		),
		array( // dia7
			'title'=> "El valor NULL. Lógica booleana. Condicionales",
			'links'=> array(
				'null.md'=> "Los valores NULL",
				'tablas_verdad.md'=> "Tabla de verdad y lógica trivaluada",
				'condicional.md'=> "Condicionales en SQL con ejercicios",
				'ejercicios.sql'=> "Ejercicios con condicionales en SQL",
			)
		),
		array( // dia8
			'title'=> "Uso de PHP y PDO para consultar la BD",
			'links'=> array(
				'bd_php.md'=> "Uso de BD con PHP",
				'conectar.php'=> "Código de conexión a la BD con PDO",
				'tabla_continentes.php'=> "Consulta con PDO",
				'tabla_continentes_2.php'=> "Utilizar UTF8 en la consulta",
				'ejercicios.md'=> "Ejercicios de consulta",
				'consulta_europa.php'=> "Solución 1er ejercicio",
				'consulta_dolar.php'=> "Solución 2do ejercicio",
				'consulta_america.php'=> "Solución 3er ejercicio",
			)
		),
		array( // dia9
			'title'=> "Gestor de contenidos a la BD en PHP",
			'links'=> array(
				'mesozoico1.md'=> "Creación de un gestor de contenidos (v1)",
				'mesozoico1/'=> "Solución incompleta del ejercicio anterior",
				'parametros.md'=> "Paso de parámetros a métodos PDO",
			)
		),
		array( // dia10
			'title'=> "Continuación del gestor de contenidos",
			'links'=> array(
				'mesozoico2.md'=> "Creación de un gestor de contenidos (v2)",
				'mesozoico2/'=> "Solución completa del ejercicio anterior",
				'cambios.md'=> "Cambiar datos con SQL: insert/update/delete",
				'pdo.md'=> "La clase PDO de acceso a base de datos en PHP",
			)
		),
		array( // dia11
			'title'=> "PHP para realizar filtros en las tablas",
			'links'=> array(
				'pdo.md'=> "Resumen de como usar la clase PDO",
				'diferencias_sql.md'=> "Diferencias entre MySQL y SQLite",
				'fetch.php'=> "Ejemplos de uso del método fetch de la clase PDOStatement",
				'ejercicio1.md'=> "Ejercicio de filtros en las tablas de la BD",
				'ejercicio1/'=> "Solución del ejercicio",
			)
		),
		array( // dia12
			'title'=> "Clase BaseDatos en PHP",
			'links'=> array(
				'ejercicio2.md'=> "Ejercicio de filtros con una clase PHP",
				'ejercicio2/'=> "Solución del ejercicio",
				'ejercicio3/'=> "Solución con dos clases PHP",
				'row.md'=> "La fila de la tabla",
				'dominio.php'=> "El dominio",
				'conexion.php'=> "Conectar en localhost o en el servidor remoto",
				'show.sql'=> "Mostrar elementos con SQL",
				'vistas.sql'=> "Creación y uso de vistas SQL",
			)
		),
		array( // dia13
			'title'=> "Base de datos empresarial Neptuno",
			'links'=> array(
				'neptuno.md'=> "Ejercicio para crear la BD",
				'bd_neptuno_crear.sql'=> "Crear BD y usuario",
				'bd_neptuno.sql'=> "Crear tablas e insertar datos",
				'bd_neptuno_v2.sql'=> "Versión más simplificada",
				'diagrama_neptuno.png'=> "Diagrama de la BD",
				'relaciones_neptuno.md'=> "Relaciones 1 a varios y varios a varios",
				'relaciones_neptuno.sql'=> "Crear relaciones para la integridad referencial",
				'disparadores.md'=> "Apuntes sobre disparadores",
				'disparadores.sql'=> "Ejemplo de disparadores",
				'disparadores_neptuno.sql'=> "Disparadores para la BD",
			)
		),
		array( // dia14
			'title'=> "Conexión del usuario al backend",
			'links'=> array(
				'backend1/backend.md'=> "Apuntes de conexión al backend",
				'backend1/bd_backend.sql'=> "Creación de la tabla",
				'backend1/usuario.sql'=> "Código para comprobar usuario",
				'backend1/'=> "Acceso al backend",
				'neptuno1/consultas.md'=> "Ejercicio de consultas a la BD Neptuno",
				'neptuno1/consultas.sql'=> "Solución del ejercicio de consultas",
			)
		),
		array( // dia15
			'title'=> "Consultas en la BD Neptuno",
			'links'=> array(
				'consultas2.md'=> "Ejercicio de consultas de cálculo y agrupación",
				'consultas2.sql'=> "Solución del ejercicio",
			)
		),
		array( // dia16
			'title'=> "Más consultas en BD Neptuno",
			'links'=> array(
				'consultas3.md'=> "Ejercicio de repaso de consultas",
				'consultas3.sql'=> "Solución del ejercicio anterior",
				'consultas4.md'=> "Ejercicio de realizar cambios en la estructura y datos",
				'consultas4.sql'=> "Solución del ejercicio anterior",
				'null.sql'=> "Consultas con NULL",
				'filtros.sql'=> "Filtros en el SELECT",
			)
		),
		array( // dia17
			'title'=> "Base de datos SQLite",
			'links'=> array(
				'sqlite.md'=> "Apuntes de SQLite",
				'acme.db'=> "Base de datos SQLite con la tabla viajes",
				'dump.sql'=> "Copia de seguridad de la BD",
				'viajes.php'=> "Mostrar el contenido de la tabla viajes",
				'insertar.php'=> "Añadir un nuevo viaje",
				'test.php'=> "Test de la función de validación de una fecha",
			)
		),
		array( // dia18
			'title'=> "Repaso PDO",
			'links'=> array(
				'pdo'=> "Apuntes de PDO",
				'Chinook.sqlite'=> "Base de datos de música SQLite",
				'Chinook_dump.sql'=> "Volcado SQL de la BD SQLite",
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
			<h2>UF1845 — Acceso a datos en las aplicaciones web del entorno servidor — 90 horas</h2>
		</header>
		<section>
			<article>
				<ul class="index">
				  <?php $index->printList(); ?>
			 	</ul>
			</article>
		</section>
		<h2>Enlaces</h2>
		<ul>
			<li><a href="/phpmyadmin" target="_blank">phpMyAdmin</a> en localhost</li>
			<li><a href="proinf.net/permalink/curso_de_sql_y_base_de_datos_relacional_2011">Curso de SQL 2011</a></li>
		</ul>
	</body>
</html>
