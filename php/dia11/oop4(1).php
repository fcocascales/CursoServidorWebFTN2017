<?php

  class Verdura {
    // Los atributos privados sólo se pueden usar dentro de la clase.
    // Se ponen para proteger los atributos a influencias externas.
    // La responsabilidad de los atributos es de la clase.
    private $nombre;
    private $color;
    private $peso;

    // Código de inicialización del objeto o constructor
    public function __construct($nombre, $color) {
      $this->nombre = $nombre;
      $this->color = $color;
      $this->peso = 0;
    }

    // Métodos
    public function regar() {
      $this->peso = $this->peso + 10;
    }

    public function mostrar() {
      echo "Verdura: {$this->nombre} {$this->color}<br>";
      echo "Peso: {$this->peso} gramos<br>";
    }

  } // Fin de la clase

  // Objetos ------------------------------------

  // la palabra new crea el objeto
  // El constructor se usa a la vez que el new
  $puerro = new Verdura('Puerro', 'blanco');
  //$puerro->nombre = "Puerro"; // No se puede porque es privado
  $puerro->regar();
  $puerro->regar();
  $puerro->mostrar();


?>
