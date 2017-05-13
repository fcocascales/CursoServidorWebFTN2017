<?php

  $frase = "Qué pongo de frase";
  $cuenta = 55;

  /*
    Concatenación - Pegar textos y variables
    El operador es el .
  */

  for ( $i = 0 ; $i < $cuenta ; $i++ ) {
    echo $i . ") " . $frase . "<br>" ;
  }

?>
