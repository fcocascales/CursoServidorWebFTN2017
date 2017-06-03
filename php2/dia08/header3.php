<?php
  /*
    Mostrar unos enlaces a sitios web
    y conocer cuántas veces se pulsó en
    cada enlace

  */
  $lista = array(
    'DUCK'=> array(
      'link'=> "http://duckduckgo.com",
      'visitas'=> 0,
    ),
    'WIKI'=> array(
      'link'=> "http://www.wikipedia.org",
      'visitas'=> 0,
    ),
    'PHP'=> array(
      'link'=> "http://php.net",
      'visitas'=> 0,
    ),
    'SCHOOLS'=> array(
      'link'=> "http://w3schools.com",
      'visitas'=> 0,
    ),
  );


?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enlaces</title>
  </head>
  <body>
    <h1>Enlaces</h1>
    <ul>
      <li><a href="?web=DUCK">DuckDuckGo</a></li>
      <li><a href="?web=WIKI">Wikipedia</a></li>
      <li><a href="?web=PHP">PHP.net</a></li>
      <li><a href="?web=SCHOOLS">W3Schools</a></li>
    </ul>
  </body>
</html>
