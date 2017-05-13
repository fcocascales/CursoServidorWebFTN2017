<?php

  require_once "BaseDatos.php";

  class MiBaseDatos extends BaseDatos {

    const CONEXION = 'mysql:host=localhost;dbname=bd_mesozoico';
    const USUARIO = 'mesozoico';
    const CLAVE = 'mesozoico';

    private $sqls = array(
      'dietas'=>       "SELECT id, dieta FROM dietas ORDER BY dieta",
      'dinosaurios'=>  "SELECT id, nombre, longitud FROM dinosaurios WHERE dieta_id = ? ORDER BY nombre",
      'nombre_dieta'=> "SELECT dieta FROM dietas WHERE id = ?",
    );

    public function __construct() {
      parent::__construct(self::CONEXION, self::USUARIO, self::CLAVE);
    }

    public function getDietas() {
      $sql = $this->sqls['dietas'];
      return parent::getTabla($sql);
    }

    public function getDinosaurios($dieta_id) {
      $sql = $this->sqls['dinosaurios'];
      return parent::getTabla($sql, $dieta_id);
    }

    public function getNombreDieta($dieta_id) {
      $sql = $this->sqls['nombre_dieta'];
      return parent::getValor($sql, $dieta_id);
    }

  } // class
