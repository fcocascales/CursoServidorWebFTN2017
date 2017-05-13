<?php
require_once "../classIndex.php";

class Index extends ClassIndex {
	protected $root = 'php';
	protected $list = array(
		array( // dia1
			'title'=> "Cliente/Servidor. XAMPP. Introducción al PHP",
			'links'=> array(
				'dia1.txt'=> "XAMPP, lenguajes, dominios, cliente/servidor",
				'hola.php'=> "Hola Mundo",
				'dos.php'=> "HTML",
				'tres.php'=> "echo",
				'cuatro.php'=> "echo HTML",
				'cinco.php'=> "Bucle for",
			)
		),
		array( // dia2
			'title'=> "PHP: Concatenar, bucles, condicionales, parámetros GET",
			'links'=> array(
				'ejerc01.php'=> "Operadores aritméticos",
				'ejerc02.php'=> "Concatenación",
				'ejerc04.php'=> "Sustitución de variables",
				'ejerc05.php'=> "Tabla de multiplicar del 2",
				'ejerc06.php'=> "Parámetro URL o parámetro GET",
				'ejerc07.php'=> "Enlaces con paso de parámetros por la URL",
				'ejerc08.php'=> "Todas las tablas de multiplicar",
				'ejerc09.php'=> "Ídem",
				'ejerc10.php'=> "Fichas con foto",
			)
		),
		array( // dia3
			'title'=> "PHP: Documentación, bucles y arrays",
			'links'=> array(
				'doc.md'=> "Documentación de PHP",
				'ejerc02.php'=> "Información del navegador web",
				'ejerc03.php'=> "phpinfo",
				'ejerc04.php'=> "Array indexado",
				'ejerc05.php'=> "Array de arrays",
				'ejerc06.php'=> "Array asociativo",
			)
		),
		array( // dia4
			'title'=> "PHP: Bucles, organigrama, condicionales, seguridad y formulario",
			'links'=> array(
				'bucles1.php'=> "while y do&hellip;while",
				'condicional1.php'=> "switch con los días de la semana",
				'condicional2.php'=> "switch don los números romanos",
				'ternario1.php'=> "Operador ternario ?:",
				'condicional3.php'=> "if encadenado: regalos",
				'form1.php'=> "Formulario GET: platos de cocina",
				'form2.php'=> "Formulario automatizado con array",
			)
		),
		array( // dia5
			'title'=> "PHP: Formularios, include, configuración de Apache",
			'links'=> array(
				'form3.php'=> "Formulario con poblaciones y nombre",
				'form4a.php'=> "Formulario con destino en otra página",
				'form5.php'=> "Formulario para cambiar el color de fondo",
				'subdominio.txt'=> "Subdominios con hosts y httpd.conf",
			)
		),
		array( // dia6
			'title'=> "PHP: Include y plantillas",
			'links'=> array(
				'ejemplo1.php'=> "Plantilla PHP: primera página",
				'ejemplo2.php'=> "Plantilla PHP: segunda página",
				'ejemplo3.php'=> "Plantilla PHP: tercera página",
			)
		),
		array( // dia7
			'title'=> "PHP: Web multiidioma, calculadora y contador de visitas",
			'links'=> array(
				'web1/pagina1.php'=> "Sistema de traducción manual",
				'web2/pagina1.php'=> "Mejorando el sistema de traducción",
				'web3/calculo.php'=> "Formulario de cálculo aritmético",
				'web3/calculo.html'=> "Formulario de cálculo con Javascript",
				'web4/fichero1.php'=> "Contador de visitas",
			)
		),
		array( // dia8
			'title'=> "PHP: Fichero de log y Cookies",
			'links'=> array(
				'log.php'=> "Fichero de registro. Uso de funciones",
				'cookies.php'=> "Recordar el color de fondo seleccionado",
				'cookies2.php'=> "Mostrar popup y luego ya no",
			)
		),
		array( // dia9
			'title'=> "PHP: Variables de sesión",
			'links'=> array(
				'sesion1.php'=> "Variables de sesión",
				'fantasia/unicornio.php'=> "Mostrar fotos si hay clave",
				'fantasia2/unicornio.php'=> "Ídem con redirección",
			)
		),
		array( // dia10
			'title'=> "PHP: Contadores y plantilla PHP",
			'links'=> array(
				'contadores.md'=> "Enunciado del ejercicio",
				'contadores.php'=> "Diferencias entre variable global, cookie, sesión y ficheros",
				'frontend.md'=> "Enunciado del ejercicio",
				'frontend/'=> "Una web con plantilla PHP",
			)
		),
		array( // dia11
			'title'=> "PHP: Correo electrónico y POO",
			'links'=> array(
				'contacto_form.php'=> "Formulario de contacto enviado por correo",
				'oop1.php'=> "Programación Orientada a Objetos: clase Coche y sus objetos",
				'oop2.php'=> "Clase Curso: Atributos y métodos",
				'oop4.php'=> "Clase Verdura: Atributos privados y constructor",
			)
		),
		array( // dia12
			'title'=> "PHP: Clases, arrays, GET",
			'links'=> array(
				'oop6.md'=> "Repaso de clases",
				'oop6.php'=> "Clase Número: métodos sumar y restar",
				'oop7.php'=> "Clase Rango: método contiene",
				'oop8.php'=> "Clase Contacto: métodos get",
				'oop9.php'=> "Una array agenda de objetos Contacto",
				'oop10.php'=> "Un array zoo de objetos Animales",
				'oop11.php'=> "Clase Zoo y clase Animales",
				'oop12.php'=> "Clase Palabra: sólo género",
				'oop13.php'=> "Clase Palabra: género y número",
				'repaso.md'=> "Métodos GET y SET",
			)
		),
		array( // dia13
			'title'=> "PHP: Adaptar código a clase. Atributos de clase",
			'links'=> array(
				'web1/contacto.md'=> "Ejercicio de adaptar código a una clase",
				'web1/contacto_form.php'=> "Ejercicio funcionando",
				'variables.md'=> "Variables: Tipos, global, local, parámetro, etc.",
				'oop14.php'=> "Clase Persona: Atributos de objeto y clase",
				'oop15.php'=> "Clase Persona: Las variables de objeto son apuntadores",
			)
		),
		array( // dia14
			'title'=> "PHP: Parámetros y retorno. Clase etiqueta HTML",
			'links'=> array(
				'ejerc1.php'=> "Intercambiar 2 variables: Parámetros por referencia y retornar varios valores.",
				'oop16.php'=> "Clase Importe: Parámetros opcionales y variables",
				'web1/test_Tag.php'=> "Clase Tag: Una etiqueta HTML",
				'web1/test_TagA.php'=> "Clase TagA: Una etiqueta A de HTML",
			)
		),
		array( // dia15
			'title'=> "PHP: Herencia. Funciones: parámetros y retorno",
			'links'=> array(
				'funciones.md'=> "Funciones: Parámetros y valor de retorno",
				'ejerc1.php'=> "Retornar array. Funciones print_r y var_dump",
				'herencia.md'=> "Herencia en la POO",
				'zoo.php'=> "Clases de animales: instanceof",
				'zoo2.php'=> "Clases de animales: métodos públicos",
				'zoo3.php'=> "Clases de animales: métodos protegidos",
				'bucle.md'=> "Ejercicio para realizar una clase Bucle",
				'testBucle.php'=> "Prueba de la clase Bucle",
			)
		),
		array( // dia16
			'title'=> "PHP: Markdown, Cifras en letras, Gettext",
			'links'=> array(
				'markdown.md'=> "Convertir texto Markdown en HTML",
				'pruebaCifras.php'=> "Cifras en letras",
				'web1/multiidioma.md'=> "Web multiidioma con GetText",
				'web1/'=> "Web multiidioma",
			)
		),
		array( // dia17
			'title'=> "PHP: Clase Circulo y simulación BD",
			'links'=> array(
				'circulo.md'=> "Ejercicio clase Circulo",
				'testCirculo.php'=> "Probar la clase Circulo",
				'web0/'=> "BD con arrays indexados de arrays asociativos",
				'web1/'=> "BD con arrays indexados de objetos",
				'web2/'=> "BD en MVC (Modelo/Vista/Controlador)",
			)
		),
		array( // dia18
			'title'=> "PHP: Matrices con arrays y objetos. Excepciones",
			'links'=> array(
				'web1/tabla.md'=> "Ejercicio de datos tabulares con arrays y objetos",
				'web1/prueba_datos.php'=> "Prueba del ejercicio de arrays",
				'web1/acceso_datos.php'=> "Acceso a los datos de los arrays",
				'web2/excepciones.md'=> "Apuntes de las excepciones",
				'web2/'=> "Pruebas con las excepciones",
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
			<h2>UF1844 — Desarrollo de aplicaciones web en el entorno servidor — 90 horas</h2>
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
