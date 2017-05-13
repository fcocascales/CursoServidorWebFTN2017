<?php
  $titulo = "Contacto";
  include "plantilla/header.php";
?>

<h2>Contacto</h2>

<form id="contact">
  <p>
    <label for="nombre">Nombre:</label>
    <br><input type="text" name="nombre" id="nombre">
  </p>
  <p>
    <label for="correo">Correo:</label>
    <br><input type="text" name="correo" id="correo">
  </p>
  <p>
    <label for="mensaje">Mensaje:</label>
    <br><textarea name="mensaje" id="mensaje"></textarea>
  </p>
  <p>
    <button>Enviar</button>
  </p>
</form>

<?php
  include "plantilla/footer.php";
?>
