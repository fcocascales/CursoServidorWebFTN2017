<?php
  $curso = array(
    'profesor'=> "Francisco",
    'alumnos'=> array(
      "Toni", "Barlan", "David", "Emilio",
      "Jordi", "Marta", "Sergio", "Víctor"
    ),
    'aula'=> 11,
    'ordenadores'=> 21,
    'horario'=> array(
      'dias'=> array(
        "lun", "mar", "mié", "jue", "vie"
      ),
      'hora_inicio'=> "9:00",
      'hora_final'=> "14:00"
    )
  );
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio 2</title>
</head>
<body>
  <h1>Ejercicio 2</h1>
  <h2>Enunciado</h2>
  <p>Convierte el array <strong>$curso</strong>
    a formato XML y JSON escribiendolo a mano</p>
  <h2>Solución</h2>
  <ul>
    <li><a href="curso.xml">curso.xml</a> - Sólo etiquetas</li>
    <li><a href="curso2.xml">curso2.xml</a> - Etiquetas y atributos</li>
    <li><a href="curso.json">curso.json</a></li>
  </ul>
  <h2>Enlaces</h2>
  <ul>
    <li><a href="http://jsonlint.com/">Validación de JSON</a></li>
  </ul>
</body>
</html>
