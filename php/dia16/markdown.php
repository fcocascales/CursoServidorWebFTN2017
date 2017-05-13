<?php
  /*
    /parsedown-master/Parsedown.php
            - Clase Markdown que hemos descargado de
            - http://parsedown.org
    /dia16/markdown.md
            - Texto en formato Markdown que queremos
              convertir a código HTML
    /dia16/markdown.php
            - Convertir el fichero Mardown a HTML
              usando la clase que hemos bajado.
  */

  require_once "../parsedown-master/Parsedown.php";
  $text = file_get_contents("markdown.md");
  $md = new Parsedown();

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Markdown</title>
</head>
<body>
  <?php echo $md->text($text); ?>
</body>
</html>
