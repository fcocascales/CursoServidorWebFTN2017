<?php // dia08/plantilla5/template/menu.php

$menu = array( // Array asociativo
  'Inicio'=> "index.php",
  'Uno'=> "pagina1.php",
  'Dos'=> "pagina2.php",
  'Tres'=> "pagina3.php",
);

echo "<p>";
foreach ($menu as $texto=>$enlace) {
  if ($texto == $title) {
    echo "<a href=\"$enlace\"><strong>$texto</strong></a> | ";
  } else {
    echo "<a href=\"$enlace\">$texto</a> | ";
  }
}
echo "</p>";
