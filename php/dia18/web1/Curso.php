<?php

  class Curso {

    private $nombre;
    private $num_alumnos;
    private $num_horas;

    public function __construct($nombre, $alumnos, $horas) {
      $this->nombre = $nombre;
      $this->num_alumnos = $alumnos;
      $this->num_horas = $horas;
    }

    public function getNombre() {
      return $this->nombre;
    }
    public function getNumAlumnos() {
      return $this->num_alumnos;
    }
    public function getNumHoras() {
      return $this->num_horas;
    }

    public function setNombre($valor) {
      $this->nombre = $valor;
    }
    public function setNumAlumnos($valor) {
      $this->num_alumnos = $valor;
    }
    public function setNumHoras($valor) {
      $this->num_horas = $valor;
    }

    public function addNumHoras($horas) {
      if ($this->num_horas + $horas >= 0) {
        $this->num_horas += $horas;
      }
      else throw new Exception("No se permiten valores negativos");
    }

  }
