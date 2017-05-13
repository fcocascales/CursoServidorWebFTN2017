<?php

  // pdo


  public static function conexion() {

    try {

      $conn = new PDO("mysql:host=localhost;dbname=pruebas", "root", "");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn->exec("SET CHARACTER SET UTF8")
    }
    catch (Exception $ex) {
      die("Error ".$ex->getMessage());
      echo "Línea del error ". $ex->getLine();
    }

}


$dns=”mysql:dbname=tubase;host:localhost;port=3306”;
$opciones=[ PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC ];

$pdo= new PDO($dns,$usuario,$clave,$opciones);
