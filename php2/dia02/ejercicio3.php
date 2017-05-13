<?php

  /*
    Crea una variable llamada $iva
    La variable tendrá un valor de porcentaje.

    Validar la variable:
      Mostrar un mensaje de "correcto" si la variable $iva
      está entre 0 y 100. En caso contrario mostrar un mensaje
      de "error".
  */
  $iva = 50;

  if ($iva >= 0 && $iva <= 100) {
    echo "El IVA $iva% es correcto";
  }
  else {
    echo "El IVA $iva% es erróneo";
  }


 ?>
