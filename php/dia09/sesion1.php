<?php
  /*
    Variables de sesión

    Una sesión se inicia cuando te conectas al servidor
    con el navegador web.
    Una sesión acaba cuando cierras el navegador web
    o cuando ha pasado mucho tiempo.

    Dentro de la sesión el servidor puede almacenar
    variables. Se guardan en el servidor.

    Las variables globales en PHP sólo se utilizan
    en una sóla página. No se pueden compartir en
    todas las páginas PHP que forman un sitio web.

    Las variables de sesión son una especie de
    variables superglobales, es decir, que se comparten
    en todas las páginas del sitio web.

    Se usa en los backend para saber el usuario
    ha hecho o no login.
  */

  session_start();

  // Variable global a la página
  $producto = 'pan';

  // Variable global al sitio web (a todas las páginas)
  $_SESSION['producto'] = 'vino';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sesión 1</title>
  </head>
  <body>
    <h1>Sesión 1</h1>
    <h2>En esta página se asigna un valor a las dos variables</h2>
    <ul>
      <li>producto de la página=<?php echo $producto ?></li>
      <li>producto del sitio=<?php echo $_SESSION['producto'] ?></li>
    </ul>
    <p><a href="sesion2.php">sesion2.php</a>
  </body>
</html>
