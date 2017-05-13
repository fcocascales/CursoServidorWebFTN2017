<?php
  /*
    Firefox:
      Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:51.0) Gecko/20100101 Firefox/51.0

    Chrome:
      Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36

    Internet Explorer (Trident):
      Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko
  */
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <h1>Navegador web</h1>
    <p><?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
  </body>
</html>
