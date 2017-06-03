<?php

  // Leer la cookie guardada
  // en "cookie1.php"

  echo "<h1>Leer cookies</h1>";

  $ciudad = $_COOKIE['ciudad'];
  echo "<p>La cookie ciudad vale $ciudad</p>";

  /*
    Con la función isset() se puede comprobar
    si existe la cookie
    Con la función empty() se puede saber si está
    vacía la cookie
  */
