<?php

  class Palabra {

    private $singular;
    private $plural;
    private $genero; // femenino|masculino
    private $cantidad;

    public function __construct($singular, $plural, $genero) {
      $this->singular = $singular;
      $this->plural = $plural;
      $this->genero = $genero;
      $this->cantidad = 1;
    }

    public function articular() {
      switch ($this->genero) {
        case 'femenino':
          return $this->articularFemenino();
        case 'masculino':
          return $this->articularMasculino();
        default:
          return "ERROR";
      }
    }

    private function articularFemenino() {
      if ($this->cantidad == 0)
        return "ninguna ".$this->singular;
      elseif ($this->cantidad == 1)
        return "una ".$this->singular;
      else
        return "unas ".$this->plural;
    }

    private function articularMasculino() {
      if ($this->cantidad == 0)
        return "ningún ".$this->singular;
      elseif ($this->cantidad == 1)
        return "un ".$this->singular;
      else
        return "unos ".$this->plural;
    }

    public function setCantidad($valor) {
      if ($valor >= 0) $this->cantidad = $valor;
    }


  } // Fin de la clase Palabra

  //---------------------------------------------

  $p1 = new Palabra('mesa', 'mesas', 'femenino');
  $p2 = new Palabra('armario', 'armarios', 'masculino');
  $p3 = new Palabra('sillón', 'sillones', 'masculino');
  $p4 = new Palabra('pared', 'paredes', 'femenino');

  $p2->setCantidad(4);
  $p3->setCantidad(2);
  $p4->setCantidad(0);

  echo $p1->articular();
  echo "<br>";
  echo $p2->articular();
  echo "<br>";
  echo $p3->articular();
  echo "<br>";
  echo $p4->articular();
  echo "<br>";



?>
