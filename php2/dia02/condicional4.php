<?php
  // Realizar if encadenados
  // if ... elseif ... elseif ... else

  // Se puede poner "elseif" todo junto
  //  o se puede poner "else if" separado.

  $segundos = 6000;

  if ($segundos >= 60*60*24)
  {
    echo "Al menos es un día";
  }
  else if ($segundos >= 60*60)
  {
    echo "Al menos es una hora";
  }
  else if ($segundos >= 60)
  {
    echo "Al menos es un minuto";
  }



 ?>
