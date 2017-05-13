<?php
  include "Form2.php";
  $form1 = new Form('fco.cascales@gmail.com', "Contacto web");
  $form1->enviar();

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contacto enviado</title>
</head>
<body>
  <h1>Contacto enviado</h1>
  <?php if ($form1->hayError()): ?>
    <p><?php $form1->mostrarErrores() ?></p>
  <?php else: ?>
    <p>Tus datos han sido enviados correctamente</p>
  <?php endif; ?>
</body>
</html>
