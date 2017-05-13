<?php

  class Palabra {

    private $texto;
    private $genero; // femenino|masculino

    public function __construct($texto, $genero) {
      $this->texto = $texto;
      $this->genero = $genero;
    }

    public function articular() {
      if ($this->genero == 'femenino')
        return "una ".$this->texto;
      else
        return "un ".$this->texto;
    }

  } // Fin de la clase Palabra

  //---------------------------------------------

  $p1 = new Palabra('mesa', 'femenino');
  $p2 = new Palabra('armario', 'masculino');
  $p3 = new Palabra('silla', 'femenino');

  echo $p1->articular();
  echo "<br>";
  echo $p2->articular();
  echo "<br>";
  echo $p3->articular(); 
  echo "<br>";



?>
