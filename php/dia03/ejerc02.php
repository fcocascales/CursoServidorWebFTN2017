<?php
  /*
    EJERCICIO
    A partir de la variable $agent hay que
    calcular la variable $navegador.
    Los valores posibles de la variable $navegador
    son: "Firefox", "Chrome", "IE", "Otro".
    Hay que usar la función strpos y los if.

    PSEUDO-CÓDIGO:
    - Si en la variable $agent aparece el substring
      "Firefox" es que es el Firefox
    - sino si aparece el substring "Chrome" es que
      es el Chrome
    - sino si aparece el substring "Trident" es que
      es el IE
    - y sino es otro navegador.
  */

  $agent = $_SERVER['HTTP_USER_AGENT'];

  if (strpos($agent, 'Firefox') !== false) {
    $navegador = 'Firefox';
  }
  elseif (strpos($agent, 'Chrome') !== false) {
    $navegador = 'Chrome';
  }
  elseif (strpos($agent, 'Trident') !== false) {
    $navegador = 'IE';
  }
  else {
    $navegador = 'Otro';
  }

 ?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <h1>Identificar el navegador web</h1>
    <p><?php echo $navegador; ?></p>
  </body>
</html>
