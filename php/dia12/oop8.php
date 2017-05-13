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

$contacto1 = new Contacto('María','123-45-67','maria@correo.es');
$contacto2 = new Contacto('Juan','890-12-34','juan@email.com');

echo $contacto1->getNombre()
  ." tiene el teléfono "
  .$contacto1->getTelefono()
  ."<br>";

echo "El correo de "
  .$contacto2->getNombre()
  ." es "
  .$contacto2->getCorreo()
  ."<br>";



?>
