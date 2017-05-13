<?php
  header('Content-Type: text/plain');

  require_once "funciones.php";

  function probar($fecha) {
    $mensaje = getDateValidationMessage($fecha);
    echo "$fecha - $mensaje\n";
  }

  echo "MAL:\n";
  probar("");
  probar("abc");
  probar("123456");
  probar("1234567890");
  probar("1234567890123");
  probar("2017/12/31");
  probar("1800-05-20");
  probar("2200-05-20");
  probar("2017-00-20");
  probar("2017-13-20");
  probar("2017-06-00");
  probar("2017-06-32");
  probar("2017-02-29");
  probar("2016-02-30");
  probar("2016-2a-07");
  probar("2016-12-7b");

  echo "\nBIEN:\n";
  probar("2017-02-28");
  probar("2016-02-29");
  probar("2017-04-20");
  probar("2017-01-31");
  probar("2017-05-01");
  probar("2017-04-30");
