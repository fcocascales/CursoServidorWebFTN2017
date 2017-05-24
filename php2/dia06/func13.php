<?php // func13.php

/*
  Variables globales y variables locales

  Las variables globales se inicializan en la página
  y existen mientras la página se ejecuta.
  Se pueden usar en cualquier parte, también dentro
  de un función.

  Recomendaciones:
   - Cuantas menos variables globales se usen mejor.
   - No usar variables globales dentro de una función
   - La solución sería usar POO (clase y objetos)

  Las variables locales se inicializan dentro de una función
  y existen mientras la función ejecuta.
  No se puede usar una variable local fuera de una función.

*/

$nombre = "Pepe"; // Es una variable global

function saludar() {
  global $nombre; // Avisar de que $nombre es variable global
  $saludo = "Hola $nombre";
  return $saludo;
}

echo saludar(); // Hola Pepe
