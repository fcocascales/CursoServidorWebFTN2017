<?php
  /*
    1 punto = Clase círculo dentro del "Circulo.php"
    1 punto = constante PI
    1 punto = atributo $radio
    1 punto = constructor
    1 punto = método setRadio
    1 punto = método getRadio
    1 punto = método getCircunferencia
    1 punto = método getArea
  */


  class Circulo {

    // Constantes
    const PI = 3.1416; // self::PI (clase)

    // Atributos
    private $radio; // $this->radio (objeto)

    /*
      El constructor se utiliza al crear el objeto.
      El parámetro 10 se almacena dentro del objeto,
      en el atributo radio del objeto.

        $obj1 = new Circulo(10);
    */
    public function __construct($radio=1) {
      $this->radio = $radio;
    }

    /*
      Este método se utiliza para cambiar
      el valor del radio.
    */
    public function setRadio($valor) {
      $this->radio = $valor;
    }

    /*
      Para obtener el radio del círculo
    */
    public function getRadio() {
      return $this->radio;
    }

    public function getCircunferencia() {
      // 2*PI*R
      return 2 * self::PI * $this->radio;
    }

    public function getArea() {
      // PI*R^2
      return self::PI * pow($this->radio, 2);
    }

  }








?>
