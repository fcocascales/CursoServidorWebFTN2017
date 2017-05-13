<?php

  $frase = "Hoy ha empezado el curso";
  $cuenta = 100;

  /*
    Bucle for contador:
      - $i=0 : Inicializar la variable $i a 0
      - $i<$cuenta : Condición de continuación
      - $i++ : Va al siguiente paso del bucle.
              Incrementa la variable $i en 1 unidad
      - Este bucle ejecuta el código que está
        entre llaves { } 100 veces. Desde $i==0
        hasta $i==99
  */

  for ( $i = 0 ; $i < $cuenta ; $i++ ) {
    echo $i ;
    echo ") " ;
    echo $frase ;
    echo "<br>" ;
  }

?>
