<?php

  function maligna() {
    $a = 10;
    $b = 0;
    $c = $a / $b;
    echo $c;
  }

  // El try no sirve de nada
  //  porque no se puede atrapar
  //    "Warning: Division by zero"

  try {
    maligna();
  }
  catch (Exception $ex) {
    echo "No se puede";
  }
