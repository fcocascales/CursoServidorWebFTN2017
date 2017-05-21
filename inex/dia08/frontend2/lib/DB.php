<?php

  class DB {

    const CONFIG = array(
      'ALUMNO.fomentformacio.tech'=> array(
        'conexion'=> "mysql:host=localhost;dbname=NIF_extranet;charset=utf8",
        'user'=> "NIF_nombre",
        'password'=> "XXXXXX",
      ),
      'probando.localhost'=> array(
        'conexion'=> "mysql:host=localhost;dbname=bd_extranet;charset=utf8",
        'user'=> "root",
        'password'=> "cascales",
      ),
      'localhost'=> array(
        'conexion'=> "mysql:host=localhost;dbname=bd_extranet;charset=utf8",
        'user'=> "root",
        'password'=> "",
      )
    );

    private static $pdo = null;

    public static function get() {
      if (empty(self::$pdo)) {
        self::$pdo = self::init();
      }
      return self::$pdo;
    }

    private static function init() {
      $config = self::CONFIG[$_SERVER['SERVER_NAME']];
      extract($config);
      $pdo = new PDO($conexion, $user, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->exec("SET CHARACTER SET utf8");
      return $pdo;
    }

    //-------------------------------------------
    // QUERY METHODS

    public function queryTable($sql, ...$params) {
      $pdo = self::get();
      $result = $pdo->prepare($sql);
      $result->execute($params);
      $assoc = $result->fetchAll(PDO::FETCH_ASSOC);
      return $assoc;
    }

    public function queryAssoc($sql, ...$params) {
      $pdo = self::get();
      $result = $pdo->prepare($sql);
      $result->execute($params);
      $assoc = $result->fetchAll(PDO::FETCH_KEY_PAIR);
      return $assoc;
    }

    public function queryValue($sql, ...$params) {
      $pdo = self::get();
      $result = $pdo->prepare($sql);
      $result->execute($params);
      $row = $result->fetch(PDO::FETCH_NUM);
      return $row[0];
    }

}
