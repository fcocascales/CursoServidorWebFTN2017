<?php
/*
  OOP = Object Oriented Programming
  POO = Programación orientada a objetos

  En los lenguajes Java y C# todo es POO.
  En PHP es opcional.

  Encapsula los atributos y los métodos
  que manipulan esos atributos dentro de
  una estructura de datos llamada clase.

  Ejemplo:
    Un coche puede pertenecer a
      la clase coche, la idea del coche.
    Atributos de un coche:
      la marca, modelo, color, nºplazas, etc.
    Métodos de un coche:
      Arrancar, Parar, Estacionar, Conducir.

    Un objeto sería un coche en concreto.
    Sería este coche. El que tiene esta
    matrícula.

    Clase hay una y objetos hay muchos.
*/

  class Coche {
    // Atributos
    public $matricula;
    public $marca;
    public $modelo;

    // Métodos
    public function arrancar() {
      echo "El coche ".$this->matricula.
        " ha arrancado<br>";
    }
    public function parar() {
      echo "El coche ".$this->matricula.
        " ha parado<br>";
    }

  } // Fin de la clase Coche

  // Objetos

  // La variable $coche1 apunta
  //    al objeto de la clase Coche
  // La clase es la plantilla para
  //    crear los objetos
  $coche1 = new Coche();
  $coche1->matricula = "BZZ 7890";
  $coche1->marca = "Nissan";
  $coche1->modelo = "Note";
  $coche1->arrancar();
  $coche1->parar();

  // Otro coche
  $coche2 = new Coche();
  $coche2->matricula = "FJP 4900";
  $coche2->marca = "Seat";
  $coche2->modelo = "Ibiza";
  $coche2->arrancar();

?>
