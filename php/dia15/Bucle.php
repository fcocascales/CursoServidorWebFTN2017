<?php
  /*
    1 punto = Hacer la clase
    1 punto = Hacer los atributo y privado
    1 punto = Por hacer el constructor
    1 punto = Inicializar los atributos
    1 punto = Declarar todos los métodos
    1 punto = Código de los métodos set
    2 puntos = Código del método imprimir
    1 punto = Separar en ficheros la clase y su prueba
    1 punto = Si da el resultado correcto
    1 punto = Quitar la última coma
    1 punto = Inicializar atributos en el constructor
    2 puntos = Evitar el bucle infinito cuando incremento es 0
    1 punto = Si el incremento>0 y inferior>superior
               o bien mostrar un mensaje de error
               o bien intercambiar inferior por superior
    1 punto = Si el incremento<0 y inferior<superior
              o bien mostrar un mensaje de error
              o bien intercambiar inferior por superior
    2 puntos = Si hace bucles hacia atrás cuando incremento negativo
    1 punto = Por controlar el valor del parámetro con floatval
    1 punto = Usar los métodos SET en el constructor
              No repetir el mismo código.
    2 punto = Dividir el código en funciones pequeñas
              Cada función debe hacer una sola función.
              No repetir el mismo código.
  */
  class Bucle {

    private $inferior;
    private $superior;
    private $incremento;

    public function __construct($inf=0, $sup=0, $inc=0) {
      $this->setInferior($inf);
      $this->setSuperior($sup);
      $this->setIncremento($inc);
    }

    public function setInferior($valor) {
      $this->inferior = floatval($valor);
    }
    public function setSuperior($valor) {
      $this->superior = floatval($valor);
    }
    public function setIncremento($valor) {
      $this->incremento = floatval($valor);
    }
    public function imprimir() {
      if ($this->incremento == 0) echo "Bucle infinito";
      else $this->bucle();
    }
    private function bucle() {
      for (
        $i = $this->inferior;
        $this->condicion($i);
        $i += $this->incremento
      ){
        if ($i == $this->inferior) echo $i;
        else echo ", $i";
      }
    }
    private function condicion($i) {
      if ($this->incremento > 0)
           return $i <= $this->superior;
      else return $i >= $this->superior;
    }

  }
