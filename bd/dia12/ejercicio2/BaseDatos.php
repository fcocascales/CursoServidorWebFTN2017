<?php

  class BaseDatos {

    private $pdo = null;

    private function conectar_sino_conectado() {
      if ($this->pdo == null) $this->conectar_bd();
    }

    private function conectar_bd() {
      $this->pdo = new PDO('mysql:host=localhost;dbname=bd_mesozoico', 'root', '');
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->pdo->exec("SET CHARACTER SET UTF8");
    }

    public function getDietas() {
      $this->conectar_sino_conectado();
      $sql = "SELECT id, dieta FROM dietas ORDER BY dieta";
      $tabla = $this->pdo->query($sql);
      return $tabla; // PDOStatement
    }

    public function getDinosaurios($dieta_id) {
      $this->conectar_sino_conectado();
      $sql = "SELECT id, nombre, longitud
          FROM dinosaurios WHERE dieta_id = ? ORDER BY nombre";
      $tabla = $this->pdo->prepare($sql);
      $tabla->execute(array($dieta_id));
      return $tabla; // PDOStatement
    }

    public function getNombreDieta($id) {
      $this->conectar_sino_conectado();
      $sql = "SELECT dieta FROM dietas WHERE id = ?";
      $tabla = $this->pdo->prepare($sql);
      $tabla->execute(array($id));
      $row = $tabla->fetch();
      return $row['dieta']; // string
    }

  } // class
