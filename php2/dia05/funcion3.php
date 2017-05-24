<h1>Función htmlspecialchars()</h1>
<p>Imprimir un texto en la página HTML</p>
<p>Codifica un texto a HTML</p>
<?php

echo "<h2>Ejemplo 1</h2>";
$texto = "Hola <strong>Mundo</strong>";
echo $texto; // En negrita
echo "<br>";
$texto_en_html = htmlspecialchars($texto);
// "Hola &lt;strong&gt;Mundo&lt;/strong&gt;"
echo $texto_en_html;
echo "<br>";

echo "<h2>Ejemplo 2</h2>";
echo htmlspecialchars("\"&'<>"); // "&'<>
echo "<br>";
echo "&quot;&amp;&apos;&lt;&gt;";
/*
Cambia los siguientes caracteres por entidades HTML
  &  -->  &amp;
  "  -->  &quot; no
  '  -->  &apos; no
  <  -->  &lt;
  >  -->  &gt;
*/
