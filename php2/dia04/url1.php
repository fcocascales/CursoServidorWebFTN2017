<?php

  /*
    Obtener los parámetros URL

    Método 1: Obtener todo el "query string"
    Método 2: Obtener en array asociativo $_GET

  */

  echo '<h1>Parámetros URL</h1>';

  echo '<h2>Obtener los parámetros URL</h1>';

  echo '<h3>1) Query string</h3>';
  echo $_SERVER['QUERY_STRING'];

  echo '<h3>2) Array asociativo $_GET</h3>';
  echo '<pre>';
  print_r($_GET);
  echo '</pre>';

  echo '<h2>Poner los parámetros URL</h2>';

  echo '<h3>1) Enlaces con la etiqueta A HREF</h3>';
  echo '<ul>';
  echo '<li><a href="url1.php?lang=ca&filtro=uno&dato=10">Enlace 1</a></li>';
  echo '<li><a href="url1.php">Enlace 2</a></li>';
  echo '</ul>';

  echo '<h3>2) Barra de direcciones del navegador web</h3>';
  echo '<p>Se puede escribir en la barra de dirección</p>';

  echo '<h3>3) Con un formulario</h3>';
?>

  <form action="url1.php" method="get">
    <label>Nombre:   </label><input type="text" name="nombre"   ><br>
    <label>Teléfono: </label><input type="text" name="telefono" ><br>
    <label>CP:       </label><input type="text" name="cp"       ><br>
    <button>Enviar</button>
  </form>
