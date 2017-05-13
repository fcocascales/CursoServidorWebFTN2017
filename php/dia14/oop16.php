<?php

  class Importe {

    private $cantidad;
    private $precio;

    // Valor predeterminado del parámetro cuando no se indica
    public function __construct($precio=50, $cantidad=1) {
      $this->cantidad = $cantidad;
      $this->precio = $precio;
    }

    public function getImporte() {
      return $this->cantidad * $this->precio;
    }

    public function sumaImportes(Importe $importe2) {
      // $this es el objeto actual
      // Es como un parámetro adicional de la función
      return $this->getImporte() + $importe2->getImporte();
    }

    public function sumaTresImportes(Importe $importe2, Importe $importe3) {
      return $this->getImporte()
        + $importe2->getImporte()
        + $importe3->getImporte();
    }

    // Número de parámetros variables: 0, 1, 2, 3, ... parámetros
    // El método de los puntos suspensivos es sólo a partir de la versión PHP5.6
    // Dentro de la función $importes es un array en cambio
    //   al llamar a la función se ponen parámetros variables
    public function sumaVariosImportes(...$importes) {
      $total = $this->getImporte();
      foreach($importes as $imp) {
        $total = $total + $imp->getImporte();
      }
      return $total;
    }

    // Sumar importes y números
    // El operador instanceof indica la variable
    //   es de una clase determinada
    public function sumaImportesNumeros(...$importes) {
      $total = $this->getImporte();
      foreach($importes as $imp) {
        if ($imp instanceof Importe)
          $total = $total + $imp->getImporte();
        else
          $total = $total + floatval($imp);
      }
      return $total;
    }

    // Una función de la clase se define con static y no tiene $this
    // Si no usas el $this pon static
    public static function sumaImportesEstatico(...$importes) {
      $total = 0;
      foreach($importes as $imp) {
        if ($imp instanceof Importe)
          $total = $total + $imp->getImporte();
        else
          $total = $total + floatval($imp);
      }
      return $total;
    }


  } // Fin de la clase

  //---------------------------------------------

  $obj1 = new Importe(200, 5);
  $obj2 = new Importe(500, 3);
  $obj3 = new Importe(700);
  $obj4 = new Importe();
  //$obj5 = new Importe(,5); // No se puede

  echo "<br>Importe1: ".$obj1->getImporte(); // 1000
  echo "<br>Importe2: ".$obj2->getImporte(); // 1500
  echo "<br>Importe3: ".$obj3->getImporte(); // 700
  echo "<br>Importe4: ".$obj4->getImporte(); // 50

  $resultado = $obj3->sumaImportes($obj4); // 750
  echo "<br>sumaImportes: ".$resultado;

  echo "<br>sumaTresImportes: ".$obj2->sumaTresImportes($obj3, $obj4); // 2250

  echo "<br>sumaVariosImportes: ".$obj1->sumaVariosImportes($obj2, $obj3, $obj4); // 3250

  echo "<br>sumaImportesNumeros: ".$obj1->sumaImportesNumeros($obj2, 5000, $obj3, 10);

  echo "<br>sumaImportesEstatico: ".Importe::sumaImportesEstatico($obj2, 30, $obj4);
 ?>
