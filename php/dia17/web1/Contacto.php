<?php

  class Contacto {

    // ATRIBUTOS
    private $nombre;
    private $telefono;
    private $correo;

    // CONSTRUCTOR
    public function __construct($nombre, $telefono, $correo) {
      $this->nombre = $nombre;
      $this->telefono = $telefono;
      $this->correo = $correo;
    }

    // MÉTODOS GETTERS
    public function getNombre() {
      return $this->nombre;
    }
    public function getTelefono() {
      return $this->telefono;
    }
    public function getCorreo() {
      return $this->correo;
    }

    // MÉTODOS SETTERS
    public function setNombre($valor) {
      $this->nombre = $valor;
    }
    public function setTelefono($valor) {
      $this->telefono = $valor;
    }
    public function setCorreo($valor) {
      $this->correo = $valor;
    }

  } // Fin de la clase

?>
