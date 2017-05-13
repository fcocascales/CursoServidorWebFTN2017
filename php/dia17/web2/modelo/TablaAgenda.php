<?php

require_once "Contacto.php";

class TablaAgenda {

  private $agenda;

  public function __construct() {
    $this->agenda = array(
      //---------- NOMBRE -- TELÉFONO --- CORREO ---
      new Contacto('Pepe',  '123-45-67', 'pepe@gmail.com'),
      new Contacto('Ana',   '555-67-80', 'ana@mail.com'),
      new Contacto('Joan',  '678-78-78', 'joan@email.net'),
      new Contacto('Marc',  '901-93-90', 'marc@correo.es'),
      new Contacto('Marta', '444-22-33', 'marta@acme.com'),
    );
  }

  public function listadoNombres() {
    $listado = array();
    foreach($this->agenda as $contacto) {
      $listado[] = $contacto->getNombre();
    }
    return $listado;
  }

  public function buscarContacto($nombre) {
    foreach($this->agenda as $contacto) {
      if ($nombre == $contacto->getNombre())
        return $contacto;
    }
    return null;
  }

}
