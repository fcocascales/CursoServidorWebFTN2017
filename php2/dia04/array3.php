<?php
  echo "<h1>Array asociativos</h1>";

  $idiomas = array(
    // clave => valor
    'ca' => "Català",
    'de' => "Deutsch",
    'en' => "English",
    'es' => "Español",
    'it' => "Italiano",
  );

  echo "<h2>Imprimir el array con print_r</h2>";
  echo "<pre>";
  print_r($idiomas);
  echo "</pre>";

  echo "<h2>Imprimir el array con foreach</h2>";
  foreach ($idiomas as $valor) {
    echo $valor . "<br>";
  }
  foreach ($idiomas as $clave => $valor) {
    echo $clave . " : " . $valor . "<br>";
  }

  echo "<h2>Añadir un elemento al array</h2>";
  $idiomas['ru'] = "Ruso";
  echo $idiomas['ru']; // Ruso

  echo "<h2>Unir los valores con implode</h2>";
  echo implode(', ', $idiomas);

  echo "<h2>Obtener todas las claves</h2>";
  $claves = array_keys($idiomas);
  echo implode(', ', $claves);

  echo "<h2>Saber si existe un elemento en el array</h2>";

  if (isset($idiomas['en'])) echo "Existe inglés<br>";
  else echo "No existe el inglés<br>";

  if (isset($idiomas['pt'])) echo "Existe portugués<br>";
  else echo "No existe el portugués<br>";
  
