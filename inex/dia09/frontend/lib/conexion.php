<?php

  class Conexion {

    private static $pdo = null; // Parecido a una variable global

    /*
      Retorna el objeto PDO
      Reutiliza el objeto PDO si ya estaba creado antes
    */
    public static function get() {
      if (self::$pdo == null) self::$pdo = self::init();
      return self::$pdo;
    }

    private static function init() {
      switch ($_SERVER['SERVER_NAME']) {
        case 'ALUMNO.fomentformacio.tech':
          $conexion = "mysql:host=localhost;dbname=NIF_extranet;charset=utf8";
          $user = "NIF_nombre";
          $password = "XXXXXX";
          break;
        case 'probando.localhost':
          $conexion = "mysql:host=localhost;dbname=bd_extranet;charset=utf8";
          $user = "root";
          $password = "cascales";
          break;
        case 'localhost':
        default:
          $conexion = "mysql:host=localhost;dbname=bd_extranet;charset=utf8";
          $user = "root";
          $password = "";
          break;
      }
      $pdo = new PDO($conexion, $user, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec("SET CHARACTER SET utf8");
      return $pdo;
    }

    //-------------------------------------------
    // MÉTODOS DE CONSULTA

    /*
      Retorna un array indexado de arrays asociativos
    */
    public static function queryTable($sql, ...$params) {
      $pdo = self::get();
      $result = $pdo->prepare($sql);
      $result->execute($params);
      $table = $result->fetchAll(PDO::FETCH_ASSOC);
      return $table;
    }

    /*
      Retorna un array asociativo
      La consulta SQL debe tener exactamente 2 campos:
        - El primer campo es la clave
        - El segundo campo es el valor
    */
    public static function queryAssoc($sql, ...$params) {
      $pdo = self::get();
      $result = $pdo->prepare($sql);
      $result->execute($params);
      $assoc = $result->fetchAll(PDO::FETCH_KEY_PAIR);
      return $assoc;
    }

    /*
      Retorna un valor: la primera columna de la primera fila
      - El SQL debería retorna un campo y una fila.
    */
    public static function queryValue($sql, ...$params) {
      $pdo = self::get();
      $result = $pdo->prepare($sql);
      $result->execute($params);
      $row = $result->fetch(PDO::FETCH_NUM); // Array indexado
      $value = $row[0];
      return $value;
    }











  } // class
