<?php
  /*
    Si es la primera vez que se muestra esta página
    (aun no se pulsó el botón de guardar) recuperamos
    el texto del fichero. En caso de que no
    exista el fichero será un texto vacío.

    Si se pulsó el botón de guardar entonces recuperamos
    el texto de los datos enviados por el formulario y
    luego lo guardamos en el fichero.
  */
  $fichero = "texto.txt";
  if (empty($_POST)) {
      if (file_exists($fichero)) {
          $texto = file_get_contents($fichero);
      } else {
          $texto = "";
      }
  } else {
      $texto = strip_tags($_POST['texto']);
      file_put_contents($fichero, $texto);
  }

?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Texto</title>
</head>
<body>
  <h1>Texto editable</h1>
  <form action="" method="post">
    <textarea name="texto" cols="50" rows="10"><?php echo $texto ?></textarea>
    <br>
    <button>Guardar</button>
  </form>
</body>
</html>
