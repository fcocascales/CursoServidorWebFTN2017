<?php
  // Realizar un if anidado
  //   Un if dentro de otro if

  $color = "gris";
  $precio = 500;

  if ($color == 'rojo')
  {
      if ($precio > 25000)
      {
          echo "El regalo es un Ferrari rojo";
      }
      else
      {
          echo "El regalo es un Seat Panda rojo";
      }
  }
  else // El color no es rojo
  {
      if ($precio > 25000)
      {
          echo "El regalo es un Porsche";
      }
      else
      {
          echo "El regalo es un ciclomotor";
      }
  }

 ?>
