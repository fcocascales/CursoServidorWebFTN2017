<?php

  class Rango {
    // 1) Atributos
    private $min, $max;

    // 2) Constructor
    public function __construct($inferior, $superior) {
      $this->min = $inferior;
      $this->max = $superior;
    }

    // 3) Métodos
    public function contiene($valor) {
      // Comprueba que el valor esté entre el mínimo y el máximo
      if ($valor >= $this->min && $valor <= $this->max) return true;
      else return false;
    }

  } // Fin de la clase Rango

// Crear objetos de la clase Rango y usarlos

$porcentaje = new Rango(0, 100);
$temperatura = new Rango(10, 22);

if ($porcentaje->contiene(67)) echo "Es un porcentaje<br>";
else echo "No es porcentaje<br>";

if ($temperatura->contiene(41)) echo "Dentro del rango temperatura<br>";
else echo "Fuera del rango temperatura<br>";









?>
