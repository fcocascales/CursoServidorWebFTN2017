<?php

  class Producto {

    // ATRIBUTOS
    private $nombre;
    private $cantidad; // Kilogramos
    private $precio; // Euros

    // CONSTRUCTOR
    public function __construct($nombre, $cantidad, $precio) {
      $this->nombre = $nombre;
      $this->cantidad = $cantidad;
      $this->precio = $precio;
    }

    // MÉTODOS GETTERS
    public function getNombre() {
      return $this->nombre;
    }
    public function getCantidad() {
      return $this->cantidad;
    }
    public function getPrecio() {
      return $this->precio;
    }

    // MÉTODOS SETTERS
    public function setNombre($valor) {
      $this->nombre = $valor;
    }
    public function setCantidad($valor) {
      $this->cantidad = $valor;
    }
    public function setPrecio($valor) {
      $this->precio = $valor;
    }

  } // Fin de la clase

?>
