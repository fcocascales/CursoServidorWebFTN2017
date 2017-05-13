<?php

  class Animales {

    // 1) Atributos

    private $especie;
    private $numero;
    private $procedencia;

    // 2) Constructor

    public function __construct($species, $number, $origin) {
      $this->especie = $species;
      $this->numero = $number;
      $this->procedencia = $origin;
    }

    // 3) Métodos GET

    public function getEspecie() { return $this->especie; }
    public function getNumero() { return $this->numero; }
    public function getProcedencia() { return $this->procedencia; }

  } // Fin de la clase Animales

//-----------------------------------------------
// Uso de los objetos

$zoo = array(
  new Animales('leones', 5, 'África'),
  new Animales('tigres', 3, 'India'),
  new Animales('ornitorrincos', 7, 'Australia'),
  new Animales('murciélagos', 10, 'Brasil'),
);

echo "<h1>Animales del Zoo</h1>";
echo "<ul>";
foreach ($zoo as $a) {
  echo "<li>".$a->getNumero()." "
             .$a->getEspecie()." de "
             .$a->getProcedencia()."</li>";
}
echo "</ul>";


?>
