<?php

  header("Content-Type: text/plain");

  $assoc = array(
    'uno'=> "dos",
    'tres'=> "cuatro"
  );
  print_r($assoc);

  $array = [
    'uno'=> "dos",
    'tres'=> "cuatro"
  ];
  print_r($array);

  $obj = (object)[
    'uno'=> "dos",
    'tres'=> "cuatro"
  ];
  print_r($obj);

  $obj2 = (object)[
    'uno'=> "dos",
    'tres'=> "cuatro",
  ];
  $obj2['cinco'] = "seis";
  $obj2['siete'] = "ocho";
  print_r($obj2);
