<?php
  /*
    Indicar a partir del código del idioma
    el nombre del idioma
      ISO-8601 - Codificar los idiomas
        con 2 letras minúsculas
  */
  /*
    Cada vez que se abre una llave habría
    que tabular las instrucciones
  */

  $codigo = 'xx'; // = asignación

  if ($codigo == 'ca') // == comparación
  {
      echo "Català";
  }
  elseif ($codigo == 'es')
  {
      echo "Español";
  }
  elseif ($codigo == 'it')
  {
      echo "Italiano";
  }
  elseif ($codigo == 'fr')
  {
      echo "Française";
  }
  else
  {
      echo "Idioma no válido";
  }

  /*
    - Se pone un if al principio
    - Se pueden seguir poniendo todos los elseif que se quiera
    - Al final opcionalmente se puede poner else

    Se ejecuta el bloque de instrucciones asociado a la primera
    condición que sea cierta.
  */

 ?>
