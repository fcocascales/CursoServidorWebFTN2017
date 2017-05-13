<?php

  /* Hacer agenda de contactos en POO */

  class Contacto {

    // 1) Atributos
    private $nombre; // El atributo es inacesible
    private $telefono;
    private $correo;

    // 2) Constructor
    public function __construct($name, $phone, $email) {
      $this->nombre = $name;
      $this->telefono = $phone;
      $this->correo = $email;
    }

    // 3) Métodos
    public function getNombre() { // El atributo de lectura
      return $this->nombre;
    }
    public function getTelefono() {
      return $this->telefono;
    }
    public function getCorreo() {
      return $this->correo;
    }

  } // Fin de la clase Contacto

//-----------------------------------------------
// Usar objetos de la clase Contacto

$agenda = array(
  new Contacto('María', '123-45-67', 'maria@correo.es'),
  new Contacto('Juan',  '890-12-34', 'juan@email.com'),
  new Contacto('Elena', '567-89-01', 'elena@gmail.com'),
  new Contacto('Pepe',  '555-23-34', 'pepe@outlook.com'),
);

echo "<h1>Agenda</h1>";
foreach($agenda as $contacto) {
  echo "<h2>".$contacto->getNombre()."</h2>";
  echo "<p>El teléfono es ".$contacto->getTelefono();
  echo "<br>El correo es ".$contacto->getCorreo()."</p>";
}

?>
