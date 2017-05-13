<?php

  include "poblaciones.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form 4a</title>
  </head>
  <body>
    <h1>Formulario</h1>
    <form action="form4b.php" method="post">
      <input type="text" name="nombre"
         maxlength="50" placeholder="Introduce tu nombre" />
      <label for="poblacion">Población:</label>
      <select id="poblacion" name="poblacion">
        <option></option>
        <?php
          foreach ($poblaciones as $opcion):
            echo "<option>$opcion</option>";
          endforeach;
        ?>
      </select>
      <input type="submit" value="Enviar" />
    </form>
  </body>
</html>
