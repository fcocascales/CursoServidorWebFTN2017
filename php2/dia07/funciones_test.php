<?php // funciones_test.php
  /*
    Ejercicio:
      1. Crear la función titulo()
         que genere <h1>, <h2>, etc.
      2. Crear la función listaEnlaces()
         que genere una lista <ul> de <li> de <a>
      3. Modificar la función lista() para
         que acepte parámetros variables en vez
         de un array.
  */


  /*
    Requiere una sóla vez de las funciones
  */
  require_once "funciones.php";

  echo titulo("Prueba de las funciones"); // h1

  echo titulo("Primera prueba", 2); // h2
  echo enlace("Wikipedia", "http://www.wikipedia.org");
  echo "<br>";
  echo resaltado("Texto en negrita");
  echo "<br>";
  echo lista("Uno","Dos","Tres","Cuatro");
  echo "<br>";

  echo titulo("Segunda prueba", 2);
  echo enlace(resaltado("php"), "http://php.net");
  echo "<br>";
  echo lista(
    resaltado("Negrita"),
    "Normal",
    enlace("Google", "http://google.com")
  );

  echo titulo("Lista de enlaces", 2);
  echo listaEnlaces(array(
    'Wikipedia'=> "http://www.wikipedia.org",
    'php.net'=> "http://php.net",
    'Google'=> "http://www.google.es",
  ));
