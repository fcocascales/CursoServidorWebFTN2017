<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Subir</title>
</head>
<body>
  <h1>Prueba de subir ficheros</h1>

  <form 
      method="post"
      enctype="multipart/form-data">
    <input type="file" name="foto"><br>
    <button>Enviar</button>
  </form>

  <h2>Recibir el fichero</h2>
  <?php
    echo '<h3>$_POST</h3>';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    echo '<h3>$_FILES</h3>';
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
  ?>

</body>
</html>
