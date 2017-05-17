<?php
// Imprimir la secuencia siguiente: 1, 2, 4, 8, 16, 32, 64 y 128

  $num = 1;

  while ($num <= 128) {

    echo "$num<br>";

    //$num += $num; // $num = $num + $num;
    $num *= 2; // $num = $num * 2;
        
  }

?>
