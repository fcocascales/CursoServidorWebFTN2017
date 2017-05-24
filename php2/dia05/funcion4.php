<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>Función substr()</h1>
<p>Extrae un texto dentro de otro texto
   a partir de una posición y de un número
   de caracteres</p>
<p>Limitar el número de caracteres de un texto</p>
<?php
  $texto = "Barcelona";

  echo substr($texto, 0, 3); // Bar
  echo "<br>";
  echo substr($texto, 3, 4); // celo
  echo "<br>";
  echo substr($texto, 6); // ona
  echo "<br>";
  echo substr($texto, -3); // ona

  echo "<h2>Otras funciones de texto</h2>";
  echo "<h3>Mayúsculas: strtoupper(), mb_strtoupper()</h3>";
  echo mb_strtoupper("Murciélago");
  echo "<h3>Minúsculas: strtolower(), mb_strtolower</h3>";
  echo mb_strtolower("MURCIÉLAGO");
  echo "<h3>Primera letra mayúsculas: ucfirst()</h3>";
  echo ucfirst("álex gonzález");
  echo "<h3>Primera letra mayúsculas de cada palabra: ucwords() y mb_convert_case()</h3>";
  echo ucwords("álex gonzález");
  echo "<br>";
  echo mb_convert_case("álex gonzález", MB_CASE_TITLE);
?>

</body>
</html>
