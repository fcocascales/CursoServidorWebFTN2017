<?php // header1.php

  /*
    Imprimir un fichero de texto.
    No debe mostrarse como HTML
  */
  /*
    El MIME se utiliza para indicar tipos de fichero:
      "text/plain" - Indica que es un fichero de texto
      "text/html" - HTML
      "text/css" - CSS
      "application/json" - JSON
      "application/xml" - XML
      "image/jpeg" - JPG
  */
  header("Content-Type: text/plain");

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Título</title>
</head>
<body>
  <h1>Título</h1>
</body>
</html>
