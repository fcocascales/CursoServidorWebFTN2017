<?php
  session_start();

  if (!empty($_POST)) { // ¿Ha sido enviado el form?
    if ($_POST['clave'] == 'pepito') {
      $_SESSION['correcto'] = true;
    }
    else {
      $_SESSION['correcto'] = false;
    }
    /*
      Redirección a la misma página
        para borrar los datos del formulario.
      Y que me funcione el botón de atrás
        después de ver una foto.
    */
    header("Location: clave.php");
  }

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Fantasía</title>
</head>
<body>
  <h1>Fantasía</h1>
  <h2>Introduce la clave</h2>
  <form method="post">
    <p>
      <input type="text" name="clave"> (pepito)
      <br><button>Enviar</button>
    </p>
  </form>
  <h2>Fotos</h2>
  <ul>
    <li><a href="unicornio.php">Unicornio</a></li>
    <li><a href="alicia.php">Alicia</a></li>
    <li><a href="centauro.php">Centauro</a></li>
    <li><a href="dragon.php">Dragón</a></li>
  </ul>
</body>
</html>
