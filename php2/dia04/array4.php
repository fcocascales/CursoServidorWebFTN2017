<?php
  /*
    Crea un array asociativo.

    - Una agenda de teléfonos:
      - Las claves son nombres de personas.
      - Los valores son teléfonos.
    - Añadir un nuevo nombre a la agenda
    - Imprimir la agenda con un bucle foreach
  */
  echo "<h1>Agenda</h1>";

  $agenda = array(
    'ana'=> "555-67-90-12",
    'bea'=> "678-78-79-80",
    'carlos'=> "890-91-92-93",
    'dani'=> "900-01-02-03",
  );

  $agenda['montse'] = "123-45-67-89";

  foreach ($agenda as $nombre => $telefono) {
    echo "El teléfono de $nombre es $telefono <br>";
  }
