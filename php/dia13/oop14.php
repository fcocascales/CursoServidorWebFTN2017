<?php
/*
ATRIBUTOS DEL OBJETO
--------------------

A partir de una clase se pueden crear objetos.
Los objetos almacenan unos valores concretos
  para los atributos.
Ejemplo: A cada objeto de la clase Coche
  se le pone un atributo de matrícula diferente.
Para crear el objeto se utiliza new y se llama
  de forma implícita al constructor.

ATRIBUTOS DE LA CLASE
---------------------

Los atributos de la clase pertenecen a la clase.
Se pueden usar en todos los objetos.
Es muy parecido a una variable global.
*/

class Persona {

  private $nombre; // Atributo del objeto
                   // Habrá un $nombre por cada objeto
  private static $cantidad = 0; // Atributo de la clase
                   // Habra una sóla $cantidad para todos los objs.

  public function __construct($nombre) {
    $this->nombre = $nombre;
    self::$cantidad++;
  }

  /*
    Método del objeto.
       Puede usar atributos del objeto y de la clase.
  */
  public function getNombre() {
    return $this->nombre;
  }

  /*
    Método de la clase (porque pone static)
      Puede usar únicamente atributos de la clase.
  */
  public static function getCantidad() {
    return self::$cantidad;
  }

} // Fin de la clase


//-----------------------------------------------

echo Persona::getCantidad(); // Llamar a un método de la clase
echo "<br>";

$obj1 = new Persona("Laura");
$obj2 = new Persona("Carlos");

echo $obj1->getNombre(); // Llamar a un método del objeto
echo "<br>";
echo $obj2->getNombre();
echo "<br>";

echo Persona::getCantidad(); 
echo "<br>";
