<?php

class Persona {

  private $nombre;
  private static $cantidad = 0;

  public function __construct($nombre) {
    $this->nombre = $nombre;
    self::$cantidad++;
  }
  public function getNombre() {
    return $this->nombre;
  }
  public function setNombre($valor) {
    $this->nombre = $valor;
  }
  public static function getCantidad() {
    return self::$cantidad;
  }

}
//-----------------------------------------------

$obj1 = new Persona("Albert");
echo $obj1->getNombre(); // Albert
echo "<br>";
$obj1 = new Persona("Bea"); // Pierdo la referencia a Albert
new Persona("Carlos"); // No puedo hacer referencia a Carlos
echo Persona::getCantidad(); // 3
echo "<br>";
echo $obj1->getNombre(); // Bea
echo "<br>";
$obj2 = $obj1; // Dos variables que apuntan a Bea
echo $obj2->getNombre(); // Bea
echo "<br>";
echo Persona::getCantidad(); // 3
echo "<br>";
$obj1->setNombre("Beatriz"); // Cambio el nombre de Bea
echo $obj2->getNombre(); // Beatriz
echo "<br>";









//
