<?php

  $carta = array (
    'paella'=> "Paella valenciana 10€",
    'fideua'=> "Fideuá tradicional 8€",
    'ensalada'=> "Ensalada verde 5€",
    'postre'=> "Pera, manzana o flan 2€",
  );

  $plato = isset($_GET['plato'])? $_GET['plato'] : '';

  // Por seguridad asegurarse que plato tenga un valor correcto
  // Si no existe el plato en la carta
  if ( ! array_key_exists($plato, $carta)) {
    $plato = '';
  }

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form 2</title>
  </head>
  <body>
    <h1>Form 2</h1>

    <p><?php echo "El plato seleccionado es <strong>$plato</strong>"; ?></p>

    <form method="get">
      <select name="plato">
        <option value="">Sin plato</option>
        <?php
          foreach ($carta as $clave => $texto) {
            echo "<option value=\"$clave\">$texto</option>";
          }
        ?>
      </select>
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
