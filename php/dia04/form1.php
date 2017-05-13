<?php

  $plato = isset($_GET['plato'])? $_GET['plato'] : '';

  // Por seguridad asegurarse que plato tenga un valor
  // correcto
  if ($plato != 'paella' && $plato != 'fideua' && $plato !='ensalada') {
    $plato = '';
  }

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form 1</title>
  </head>
  <body>
    <h1>Form 1</h1>

    <p><?php echo "El plato seleccionado es $plato"; ?></p>

    <form method="get">
      <select name="plato">
        <option value="">Sin plato</option>
        <option value="paella">Paella valenciana</option>
        <option value="fideua">Fideuá tradicional</option>
        <option value="ensalada">Ensalada verde</option>
      </select>
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
