<?php // fichero6.php

/*
  Leer o escribir varias variables en un fichero.

    $contador = 3;
    $visita = date('Y-m-d H:i:s');
    $texto = "Hola Mundo";
*/
/*
  Leer o escribir un array en un fichero.
*/
$datos = array(
  'contador'=> 3,
  'visita'=> date('Y-m-d H:i:s'),
  'texto'=> "Hola Mundo",
);
/*
  JSON (Javascript Object Notation)
  - Es un fichero de texto donde se pueden almacenar datos.
  - Se utiliza para enviar mensajes entre máquinas
  - Se usa en AJAX
*/
$json = json_encode($datos); // Convierte el array en un texto JSON
file_put_contents("datos.json", $json);

echo "El fichero datos.json ha sido guardado";
