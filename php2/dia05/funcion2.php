<h1>La función strip_tags()</h1>
<p>Elimina todas las etiquetas HTML de un texto</p>
<p>Sanea una entrada de texto del usuario</p>
<p>Un texto con etiquetas HTML que se imprima en
  la página web la puede modificar y puede ejecutar
  código Javascript</p>
<?php
    echo "<h2>Ejemplo 1</h2>";
    $texto = "Hola <strong>Mundo</strong>";
    echo $texto; // En negrita
    echo "<br>";
    $texto_sin_etiquetas = strip_tags($texto);
    echo $texto_sin_etiquetas; // Sin negrita
    echo "<br>";

    echo "<h2>Ejemplo 2</h2>";
    $texto = "<script>alert('Buuu!')</script>";
    $texto = strip_tags($texto); // Elimina <script>
    echo $texto;
