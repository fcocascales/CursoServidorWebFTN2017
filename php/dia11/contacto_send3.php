<?php
  // GLOBALES -----------------------------------

  // Guardar aquí todos los mensajes de error
  $errores = array();

  // FUNCIONES ----------------------------------

  /*
    Obtiene el parámetro POST nombre
  */
  function getNombre() {
    global $errores;
    $nombre = getParam('nombre', 20);
    if (empty($nombre)) {
      $errores[] = "Falta el nombre";
    }
    return $nombre;
  }
  /*
    Obtiene el parámetro POST correo
  */
  function getCorreo() {
    global $errores;
    $correo = getParam('correo', 50);
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
      $errores[] = "El correo es inválido";
    }
    return $correo;
  }
  /*
    Obtiene el parámetro POST mensaje
  */
  function getMensaje() {
    global $errores;
    $mensaje = getParam('mensaje', 1000);
    if (empty($mensaje)) {
      $errores[] = "Falta el mensaje";
    }
    return $mensaje;
  }
  /*
    Obtiene un parámetro POST saneado:
    sin espacios en blanco sobrantes y recortado
    a una longitud máxima.
  */
  function getParam($name, $maxLength) {
    $value = isset($_POST[$name])? $_POST[$name]: "";
    $value = trim($value);
    $value = substr($value, 0, $maxLength);
    return $value;
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
