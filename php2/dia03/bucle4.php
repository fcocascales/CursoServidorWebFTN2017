<?php
/*
  Bucle 4: foreach

  Para cada elemento...

  Se utiliza para recorrer arrays.
  Es el bucle más utilizado de todos.
*/

$array = array(
  'uno', 'dos', 'tres',
  'cuatro', 'cinco', 'seis',
  'siete', 'ocho', 'nueve',
);

foreach ($array as $item) {
  echo "$item<br>";
}
