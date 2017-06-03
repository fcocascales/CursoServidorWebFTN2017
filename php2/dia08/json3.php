<?php
  /*
    Mostrar datos JSON
    Puede ser un servidor para AJAX

    En la respuesta del servidor al navegador web
    hay dos partes que son:
      - Cabecera
          - Se puede cambiar con la función header()
      - Contenido
          - Se imprime con la función echo
  */

  $datos = array(
    'aleatorio'=> rand(0, 1000000),
    'ahora'=> date('Y-m-d H:i:s'),
    'codigo'=> sha1(rand(0,10)),
  );

  $json = json_encode($datos, JSON_PRETTY_PRINT);

  header("Content-Type: application/json"); // Cabecera
  echo $json; // Mensaje
