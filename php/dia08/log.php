<?php
  /*
    LOG (registro)
    Almacenar datos en un fichero de texto.
    Cada línea del fichero será un registro.
    El registro puede constar de todas las
    variables que se quiera.
    Cada vez que grabemos en el fichero añadiremos
    una línea nueva al final.

    Crear un formulario para almacenar
    los datos en el fichero de "log.txt".

    Datos a almacenar:
      Fecha y la hora - Cuando
      IP - Donde
      Navegador -
      Idioma -
      Mensaje -
  */

  // PROGRAMA PRINCIPAL -------------------------

  $fechaHora = obtenerFechaHora();
  $ip = obtenerIP();
  $navegador = obtenerNavegador();
  $idioma = obtenerIdioma();
  $mensaje = obtenerMensaje();

  if (!empty($_POST)) {
    guardarLog($fechaHora, $ip, $navegador, $idioma, $mensaje);
  }

  // FUNCIONES ----------------------------------

  function obtenerFechaHora() {
    // php.net
    // "2017-03-08 09:44"
    return date('Y-m-d H:i');
  }
  function obtenerIP() {
    // Buscar en Google "php obtener ip visitante"
    //  http://ejemplocodigo.com/ejemplo-php-obtener-la-ip-real-de-una-visita/
    // 127.0.0.1 = localhost con IP4
    // ::1       = localhost con IP6
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
      return $_SERVER['HTTP_CLIENT_IP'];
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
      return $_SERVER['HTTP_X_FORWARDED_FOR'];
    else
      return $_SERVER['REMOTE_ADDR'];
  }
  function obtenerNavegador() {
    // Copia y pega el código del "dia03/ejerc02.php"
    $agent = $_SERVER['HTTP_USER_AGENT'];
    if (strpos($agent, 'Firefox') !== false)
      return 'Firefox';
    elseif (strpos($agent, 'Chrome') !== false)
      return 'Chrome';
    elseif (strpos($agent, 'Trident') !== false)
      return 'IE';
    else
      return 'Otro';
  }
  function obtenerIdioma() {
    // "ca,es-ES;q=0.8,en-US;q=0.5,en;q=0.3" --> "ca,es,en"
    $string = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $token = strtok($string, ',;');
    $langs = array();
    while ($token !== false) {
      if (substr($token,0,2) != 'q=') {
        $langs[] = substr($token, 0, 2);
      }
      $token = strtok(',;');
    }
    return implode(',', array_unique($langs));
  }
  function obtenerMensaje() {
    $mensaje = isset($_POST['mensaje'])? $_POST['mensaje']: '';
    $mensaje = strip_tags($mensaje);
    $mensaje = trim($mensaje);
    $mensaje = substr($mensaje, 0, 100);
    return $mensaje;
  }
  function guardarLog($datetime, $ip, $browser, $language, $message) {
    $linea = "$datetime|$ip|$browser|$language|$message\n";
    file_put_contents("log.txt", $linea, FILE_APPEND|LOCK_EX);
  }

 ?><!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Log</title>
   </head>
   <body>
     <h1>Log</h1>
     <?php //echo obtenerFechaHora(); ?>
     <?php //echo obtenerIP(); ?>
     <?php //echo obtenerNavegador(); ?>
     <?php //echo obtenerIdioma(); ?>
     <?php //echo obtenerMensaje(); ?>
     <form method="post">
       <label for="mensaje">Mensaje: </label>
       <input type="text" id="mensaje" name="mensaje">
       <button>Guardar</button>
     </form>
     <p><a href="log.txt">log.txt</a></p>
   </body>
 </html>
