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

  class Zoo {
    // 1) Atributos
    private $lista;

    // 2) Constructor
    public function __construct() {
      $this->lista = array();
    }

    // 3) Métodos
    public function agregarAnimales($especie, $numero, $origen) {
      $this->lista[] = new Animales($especie, $numero, $origen);
    }
    public function agregarObjetoAnimales(Animales $objetoAnimales) {
      $this->lista[] = $objetoAnimales;
    }
    public function imprimir() {
      echo "<ul>";
      foreach ($this->lista as $a) {
        echo "<li>".$a->getNumero()." "
                   .$a->getEspecie()." de "
                   .$a->getProcedencia()."</li>";
      }
      echo "</ul>";
    }

  } // Fin de la clase Zoo

//-----------------------------------------------
// Uso de los objetos

$zoo = new Zoo();
$zoo->agregarAnimales('leones', 5, 'África');
$zoo->agregarAnimales('tigres', 3, 'India');
$zoo->agregarAnimales('ornitorrincos', 7, 'Australia');
$zoo->agregarAnimales('murciélagos', 10, 'Brasil');
echo "<h2>Zoo</h2>";
$zoo->imprimir();

$acuario = new Zoo();
$acuario->agregarAnimales('tiburones', 3, 'Atlántico');
$acuario->agregarAnimales('delfines', 6, 'Pacífico');
$acuario->agregarAnimales('pulpos', 4, 'Mediterráneo');
echo "<h2>Acuario</h2>";
$acuario->imprimir();

?>
