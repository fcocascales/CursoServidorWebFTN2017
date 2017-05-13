<?php
  /*
    Si está puesta la variable num en la URL
      leer lo que vale la variable convirtiéndola en entero
    y sino
      el valor prederminado es -1
    fin si

    http://localhost/dia04/bucles1.php           $num = -1
    http://localhost/dia04/bucles1.php?num=hola  $num = 0
    http://localhost/dia04/bucles1.php?num=10    $num = 10

  */
  if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
  }
  else {
    $num = -1;
  }

?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bucles 1</title>
  </head>
  <body>
    <h1>Bucles 1</h1>

    <h2>Bucle while (mientras que)</h2>
    <p>La condición de continuación se evalua
       <strong>antes</strong> de entrar dentro del bucle</p>
    <p>El bucle se ejecuta 0 o más veces</p>
    <?php

      // Todas las variables tienen que estar inicializadas
      // Evitar los bucles infinitos

      $a = 0;
      while ($a <= $num) {
        echo "$a<br>";
        $a++;
      }

    ?>

    <h2>Bucle do while (hacer mientras que)</h2>
    <p>La condición de continuación se evalua
       <strong>después</strong> de entrar dentro del bucle</p>
    <p>El bucle se ejecuta 1 o más veces</p>
    <?php

      $a = 0;
      do {
        echo "$a<br>";
        $a++;
      } while ($a <= $num);

    ?>

  </body>
</html>
