<?php
  // GLOBALES -----------------------------------

  // Guardar aquí todos los mensajes de error
  $errores = array();

  // FUNCIONES ----------------------------------

  /*
    TODO:
    Las funciones getNombre, getCorreo y  getMensaje
    se parecen mucho entre sí. Se debería extraer el código 
    que tienen en común en otra función.
  */

  function getNombre() {
    global $errores;
    if (isset($_POST['nombre'])) {
      $nombre = trim($_POST['nombre']);
      $nombre = substr($nombre, 0, 20);
      if (empty($nombre)) $errores[] = "Falta el nombre";
    }
    else {
      $errores[] = "No hay nombre";
      $nombre = "";
    }
    return $nombre;
  }
  function getCorreo() {
    global $errores;
    if (isset($_POST['correo'])) {
      $correo = trim($_POST['correo']);
      $correo = substr($correo, 0, 50);
      if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "Correo inválido";
      }
    }
    else {
      $errores[] = "No hay correo";
      $correo = "";
    }
    return $correo;
  }
  function getMensaje() {
    global $errores;
    if (isset($_POST['mensaje'])) {
      $mensaje = trim($_POST['mensaje']);
      $mensaje = substr($mensaje, 0, 1000);
      if (empty($mensaje)) $errores[] = "Falta el mensaje";
    }
    else {
      $errores[] = "No hay mensaje";
      $mensaje = "";
    }
    return $mensaje;
  }
  function hayError() {
    global $errores;
    return !empty($errores);
  }
  function mostrarErrores() {
    global $errores;
    foreach($errores as $error) {
      echo "<p>$error</p>";
    }
    /*for ($i=0; $i<count($errores); $i++) {
      $error = $errores[$i];
      echo "<p>$error</p>";
    }*/
  }

  /*
    Desde localhost no se podrá enviar el correo.
    Si se sube la página al servidor debería funcionar.

    El protocolo para enviar el correo se llama SMTP.
    Los datos de SMTP se podría configurar por PHP o
    en la configuración del Apache.

    Es el servidor el que envía el correo. Puede haber spam.
    Se podría controlar con un CAPTCHA. Google tiene uno
    muy bueno que se llama reCaptcha.

    Para un modo avanzado de enviar correo es conveniente
    bajarse la librería PHPMailer:
      - Indicar el servidor SMTP
      - Indicar el CC, CCO
      - Formato del correo puede set HTML o texto.
      - Añadir ficheros adjuntos.
  */
  function enviarCorreo($nombre, $correo, $mensaje) {
    global $errores;
    $destinatario = "fco.cascales@gmail.com"; // El administrador de la web
    $asunto = "Contacto envíado desde la web";
    $cuerpo = "";
    $cuerpo .= "Nombre:\n$nombre\n\n"; // .= concatena acumulando
    $cuerpo .= "Correo:\n$correo\n\n";
    $cuerpo .= "Mensaje:\n$mensaje\n\n";
    if (!mail($destinatario, $asunto, $cuerpo)) {
      $errores[] = "No puedo enviar el correo";
    }
  }

  // PROGRAMA PRINCIPAL -------------------------

  $nombre = getNombre();
  $correo = getCorreo();
  $mensaje = getMensaje();

  if (!hayError()) {
    enviarCorreo($nombre, $correo, $mensaje);
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contacto enviado</title>
</head>
<body>
  <h1>Contacto enviado</h1>
  <?php if (hayError()): ?>
    <p><?php mostrarErrores() ?></p>
  <?php else: ?>
    <p>Tus datos han sido enviados correctamente</p>
  <?php endif; ?>
</body>
</html>
