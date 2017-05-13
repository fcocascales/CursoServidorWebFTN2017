<?php

class BaseDatos {

  private $pdo = null;

  public function __construct($conexion, $usuario, $clave) {
    $this->conectar($conexion, $usuario, $clave);
  }

  private function conectar_sino_conectado() {
    if ($this->pdo == null) $this->conectar();
  }

  private function conectar($conexion, $usuario, $clave) {
    $this->pdo = new PDO($conexion, $usuario, $clave);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->pdo->exec("SET CHARACTER SET UTF8");
  }

  public function getTabla($sql, ...$params) {
    $tabla = $this->get_tabla($sql, $params);
    return $tabla; // PDOStatement
  }
  public function getValor($sql, ...$params) {
    $tabla = $this->get_tabla($sql, $params);
    $row = $tabla->fetch();
    return $row[0];
  }

  private function get_tabla($sql, $params) {
    $this->conectar_sino_conectado();
    $tabla = $this->pdo->prepare($sql);
    $tabla->execute($params);
    return $tabla; // PDOStatement
  }

} // class
