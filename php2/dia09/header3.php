<?php
  /*
    Objetivo:
      Mostrar unos enlaces a sitios web
      y conocer cuántas veces se pulsó en
      cada enlace
  */
  /*$lista = array(
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
  );*/
  /*
    Pasos a seguir:
      1) Crear una estructura de datos en el archivo "enlaces.json"
         con todos la información. Se parece a una tabla de una BD.
      2) Leer el contenido del fichero y convertirlo en un
         array asociativo $datos.
      3) Con estos datos imprimir una lista de enlaces.
         Los enlaces apuntan a mi propia página. Se envía un
         parámetro GET llamado "web" con las claves: DUCK, WIKI, etc.
      4) Al picar un enlace la página se recarga y se puede
         consultar el valor del parámetro GET "web"
      4.1) Incrementar el número de visitas
      4.2) Reescribir el fichero JSON
      4.3) Ir a la dirección del vínculo
  */

  $json = file_get_contents("enlaces.json");
  $datos = json_decode($json, $assoc=true);

  if (isset($_GET['web'])) {
    $alias = $_GET['web'];

    $datos[$alias]['visitas']++;
    $json = json_encode($datos, JSON_PRETTY_PRINT);
    file_put_contents("enlaces.json", $json);

    header("Location: ".$datos[$alias]['link']);
  }

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enlaces</title>
  </head>
  <body>
    <h1>Enlaces</h1>
    <?php
      echo "<ul>\n";
      foreach($datos as $alias=>$registro) {
        $texto = $registro['texto'];
        $link = $registro['link'];
        $visitas = $registro['visitas'];
        echo "<li><a href=\"?web=$alias\" target=\"_blank\">".
          "$texto</a> &mdash; $visitas</li>\n";
      }
      echo "</ul>\n";
    ?>
    <!--
      <ul>
        <li><a href="?web=DUCK">DuckDuckGo</a></li>
        <li><a href="?web=WIKI">Wikipedia</a></li>
        <li><a href="?web=PHP">PHP.net</a></li>
        <li><a href="?web=SCHOOLS">W3Schools</a></li>
      </ul>
    -->
  </body>
</html>
