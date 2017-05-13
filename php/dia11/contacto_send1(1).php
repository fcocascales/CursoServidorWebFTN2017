<?php
  // FUNCIONES ----------------------------------
  /*
    TODO: Implementar todas las funciones.
    En este momento las funciones están escritas
    en su mínima expresión para que no de error.
  */

  function getNombre() {
    return "";
  }
  function getCorreo() {
    return "";
  }
  function getMensaje() {
    return "";
  }
  function hayError() {
    return false;
  }
  function mostrarErrores() {
  }
  function enviarCorreo($nombre, $correo, $mensaje) {
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
