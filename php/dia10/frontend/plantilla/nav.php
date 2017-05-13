<?php

  $nav = array(
    'Inicio'=> "index.php",
    'Noticias'=> "noticias.php",
    'Productos'=> "productos.php",
    'Contacto'=> "contacto.php",
  );

  if (!isset($titulo)) $titulo = "";

  echo "<nav id=\"nav\">";
  echo "<ul>";
  foreach($nav as $texto=>$link) {
    $current = $titulo==$texto? 'class="current"' : '';
    echo "<li><a $current href=\"$link\">$texto</a></li>";
  }
  echo "</ul>";
  echo "</nav>";

?>
