<?php
  class Numero {

    // 1) Atributos

    private $num;

    // 2) El constructor

    public function __construct($valor) {
      $this->num = $valor;
    }

    // 3) Métodos

    public function sumar($valor) {
      //$this->num = $this->num + $valor;
      $this->num += $valor;
    }
    public function restar($valor) {
      //$this->num = $this->num - $valor;
      $this->num -= $valor;
    }
    public function mostrar() {
      echo $this->num . '<br>';
    }

  } // Fin de la clase


// Creación y uso de los objetos

$obj1 = new Numero(100);
$obj2 = new Numero(236);
$obj3 = new Numero(-58);

$obj1->sumar(1000);
$obj1->mostrar();

$obj2->restar(36);
$obj2->mostrar();

$obj3->sumar(50);
$obj3->restar(100);
$obj3->mostrar();
















 ?>
