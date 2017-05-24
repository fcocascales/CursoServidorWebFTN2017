<?php
/*
  Crear un formulario para escribir un texto
  El texto se ha convertir a mayúsculas

  - HTML
    - Usar un formulario con método POST y sin action
    - Para escribir un texto de varias líneas usar:
        <textarea name="texto"></textarea>
    - El formulario ha de tener un botón de envío

  - PHP
    - Recibir el texto enviado
    - Usar la función strip_tags()
    - Usar la función mb_strtoupper()
    - Poner el texto dentro del <textarea>
*/

  $texto = ""; // Inicializar la variable

  if (isset($_POST['texto'])) { // ¿Está enviado el texto?
    $texto = $_POST['texto']; // Guarda el texto en una variable
    $texto = strip_tags($texto); // Eliminar etiquetas HTML
    $texto = mb_strtoupper($texto); // Convertir a mayúsculas
  }

?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Mayúsculas</title>
</head>
<body>
  <h1>Convertir un texto a mayúsculas</h1>
  <form method="post">
    <label for="texto">Texto:</label>
    <br>
    <textarea id="texto" name="texto"><?php echo $texto ?></textarea>
    <br>
    <button>Enviar</button>
  </form>

</body>
</html>
