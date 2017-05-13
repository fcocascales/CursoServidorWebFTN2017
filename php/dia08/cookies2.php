<?php
  /*
    Ejercicio de cookies

    Primera parte:
      Mostrar un popup si es la primera
      vez que visitas el sitio
      o si ha pasado más de 1 día (producción)
      o si ha pasado más de 1 minuto (desarrollo).

      - Mostrar la web -> El popup se ve
      - Refrescar la web -> El popup no se ve
        Cerrar el navegador y
          volver a la web -> El popup no se ve
      - Si ha pasado un minuto -> El popup se ve

    Segunda parte:
      Diferenciar desarrollo de producción.
      Es desarrollo si el dominio es localhost
      y sino es producción.
      Si es desarrollo la caducidad es 1 minuto
      y sino es un día.
  */

  // FUNCIONES ----------------------------------

  /**
   * Da verdadero cuando existe la cookie y sino da falso
   */
  function obtenerCookie() {
    if (isset($_COOKIE['popup'])) $ok = true;
    else $ok = false;
    return $ok;
    ////return isset($_COOKIE['popup']);
  }

  /**
   * Escribir la cookie con la caducidad debida
   */
  function escribirCookie() {
    $unDia = time()+24*60*60;
    $unMinuto = time()+60;
    $caducidad = esDesarrollo()? $unMinuto : $unDia;
    setcookie('popup', 1, $caducidad);
  }

  /**
   * Da verdadero cuando el dominio es localhost
   */
  function esDesarrollo() {
    $dominio = $_SERVER['HTTP_HOST'];
    if ($dominio == 'localhost') $ok = true;
    else $ok = false;
    return $ok;
    ////return $_SERVER['HTTP_HOST'] == 'localhost'
  }

  // PROGRAMA PRINCIPAL -------------------------

  $existe = obtenerCookie();
  if (!$existe) escribirCookie();

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookies 2</title>
    <style>
      #popup_fondo {
        position:fixed;
        left:0; right:0; top:0; bottom:0;
        background-color:rgba(0,0,0, 0.5);
        <?php //if ($existe) echo "display:none;" ?>
      }
      #popup_contenido {
        position:fixed;
        left:20%; right:20%; top:20%; bottom:20%;
        background-color:yellow;
        overflow:auto;
        color:red;
        padding:1em;
        border:6px solid magenta;
      }
      #popup_cerrar {
        position:absolute;
        right:0; top:0;
        color:red;
      }
    </style>
    <script type="text/javascript">
      function cerrarPopup() {
        var fondo = document.getElementById('popup_fondo');
        //var contenido = document.getElementById('popup_contenido');
        fondo.style.display = 'none';
        //contenido.style.display = 'none';
      }
    </script>
  </head>
  <body>
    <h1>Cookies 2</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <?php if (!$existe): ?>
      <div id="popup_fondo">
        <div id="popup_contenido">
          <button id="popup_cerrar" onclick="cerrarPopup()">&times;</button>
          <h2>Alerta con las ofertas</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    <?php endif; ?>

    <p><a href="cookies.php">cookies</a></p>

    <p><?php echo esDesarrollo()? 'desarrollo' : 'producción' ?></p>

  </body>
</html>
