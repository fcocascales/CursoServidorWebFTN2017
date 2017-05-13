<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sesión 2</title>
  </head>
  <body>
    <h1>Sesión 2</h1>
    <h2>En esta página se muestran las dos variables</h2>
    <ol>
      <li>La variable de página dará error siempre ya que no está asignada</li>
      <li>La variable del sitio dará error sólo sino se ha visitado
        antes la página sesion1.php</li>
    </ol>
    <ul>
      <li>producto de la página=<?php echo $producto ?></li>
      <li>producto del sitio=<?php echo $_SESSION['producto'] ?></li>
    </ul>
    <p><a href="sesion1.php">sesion1.php</a>
  </body>
</html>
