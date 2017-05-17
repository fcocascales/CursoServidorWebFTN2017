<?php

  echo "<h1>Manejo de variables</h1>";

  if (isset($nombre)) echo "Hay variable nombre<br>";
  else echo "No hay variable nombre<br>";

  $nombre = "Pepe"; // Crea la variable asignandole un valor

  if (isset($nombre)) echo "Hay variable nombre<br>";
  else echo "No hay variable nombre<br>";

  unset($nombre); // Borrar la variable (ya no existe)

  if (isset($nombre)) echo "Hay variable nombre<br>";
  else echo "No hay variable nombre<br>";

 ?>
