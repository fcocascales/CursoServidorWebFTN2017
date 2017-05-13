<?php

  // Para indicar decimales se usa el punto

  $precio = 23.5;
  $cantidad = 7;
  $nombre = "teclados";

  // Imprimir lo siguiente usando las variables:
  //    7 teclados a 23.5 son xxx €

  echo $cantidad;
  echo " ";
  echo $nombre;
  echo " a ";
  echo $precio;
  echo " son ";
  echo $cantidad * $precio;
  echo " €<br>";

  // Concatenar con el operador .

  echo $cantidad." ".$nombre." a ".$precio.
     " son ".$cantidad*$precio." €<br>";

  // Sustituir las variables dentro de
  //  un string de comillas dobles

  $importe = $cantidad*$precio;
  echo "$cantidad $nombre a $precio son $importe €<br>";

?>
