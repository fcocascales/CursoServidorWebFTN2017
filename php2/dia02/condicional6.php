<?php
  // Realizar un if anidado
  //   Un if dentro de otro if

  /*
    Operadores de comparación
      ==   igual a
      !=   diferente de
      >    mayor que
      <=   menor o igual que

    Operadores lógicos (o booleanos)
      &&   y
      ||   o
      and  y
      or   o
  */

  $color = "rojo";
  $precio = 50000;

  if ($color == 'rojo' && $precio > 25000)
  {
      echo "El regalo es un Ferrari rojo";
  }
  elseif ($color == 'rojo' && $precio <= 25000)
  {
      echo "El regalo es un Seat Panda rojo";
  }
  elseif ($color != 'rojo' && $precio > 25000)
  {
      echo "El regalo es un Porsche";
  }
  elseif ($color != 'rojo' && $precio <= 25000)
  {
      echo "El regalo es un ciclomotor";
  }

 ?>
