<?php

  function conexion() {
    switch ($_SERVER['SERVER_NAME']) {
      case 'ALUMNO.fomentformacio.tech':
        $conexion = "mysql:host=localhost;dbname=NIF_neptuno;charset=utf8";
        $user = "NIF_nombre";
        $password = "XXXXXX";
        break;
      case 'probando.localhost':
        $conexion = "mysql:host=localhost;dbname=bd_neptuno;charset=utf8";
        $user = "root";
        $password = "cascales";
        break;
      case 'localhost':
      default:
        $conexion = "mysql:host=localhost;dbname=bd_neptuno;charset=utf8";
        $user = "root";
        $password = "";
        break;
    }
    $pdo = new PDO($conexion, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET utf8");
    return $pdo;
  }
