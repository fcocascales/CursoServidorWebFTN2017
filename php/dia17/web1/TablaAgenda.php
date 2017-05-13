<?php

// La tabla agenda es un array de contactos

require_once "Contacto.php";

$agenda = array(
  //---------- NOMBRE -- TELÉFONO --- CORREO ---
  new Contacto('Pepe',  '123-45-67', 'pepe@gmail.com'),
  new Contacto('Ana',   '555-67-80', 'ana@mail.com'),
  new Contacto('Joan',  '678-78-78', 'joan@email.net'),
  new Contacto('Marc',  '901-93-90', 'marc@correo.es'),
  new Contacto('Marta', '444-22-33', 'marta@acme.com'),
);
