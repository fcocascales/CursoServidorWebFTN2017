<?php

  // LA CLASE -----------------------------------

  class Curso {
    // Atributos
    public $nombre;
    public $nombre_profesor;
    public $numero_alumnos;
    public $aula;

    // Métodos
    public function impartir_clase() {
      echo "{$this->nombre_profesor} ha impartido una clase<br>";
    }
    public function evaluar() {
      echo "{$this->nombre_profesor} está evaluando<br>";
    }
  }

  // LOS OBJETOS --------------------------------

  $curso1 = new Curso();
  $curso1->nombre = "Matemáticas I";
  $curso1->nombre_profesor = "Ignacio";
  $curso1->numero_alumnos = 20;
  $curso1->aula = 102;
  $curso1->impartir_clase();
  $curso1->evaluar();

  $curso2 = new Curso();
  $curso2->nombre = "Mindfulness";
  $curso2->nombre_profesor = "Sandra";
  $curso2->numero_alumnos = 8;
  $curso2->aula = 303;
  $curso2->impartir_clase();
  $curso2->evaluar();



?>
