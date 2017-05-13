<?php
  /*

  */
  class Bucle {

    private $inicio;
    private $final;
    private $paso;
    private $cuenta;

    public function __construct($inicio=0, $final=0, $paso=0) {
      $this->setInicio($inicio);
      $this->setFinal($final);
      $this->setPaso($paso);
      $this->reiniciar();
    }

    public function setInicio($valor) {
      $this->inicio = floatval($valor);
    }
    public function setFinal($valor) {
      $this->final = floatval($valor);
    }
    public function setPaso($valor) {
      $this->paso = floatval($valor);
    }
    public function reiniciar() {
      $this->cuenta = $this->inicio;
    }
    public function imprimir() {
      $this->reiniciar();
      while ($this->siguiente($valor)) {
        if ($valor == $this->inicio)
          echo $valor;
        else
          echo ", $valor";
      }
    }
    public function getArray() {
      $valores = array();
      $this->reiniciar();
      while ($this->siguiente($valor)) {
        $valores[] = $valor;
      }
      return $valores;
    }
    public function siguiente(&$valor) {
      if ($this->condicion()) {
        $valor = $this->cuenta;
        $this->cuenta += $this->paso;
        return true;
      }
      else return false;
    }
    private function condicion() {
      if ($this->paso == 0)
        throw new Exception("Bucle infinito");
      elseif ($this->paso > 0)
        return $this->cuenta <= $this->final;
      else
        return $this->cuenta >= $this->final;
    }
    public function __toString() {
      return get_class($this). " from ".
        $this->inicio." to ".
        $this->final." step ".
        $this->paso;
    }

  }
