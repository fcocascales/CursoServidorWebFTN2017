<?php
  /*
    conexion.php - 2017-04-07 - Curso FTN
    Muestra una lista de dinosaurios.

    Tiene que funcionar en:
      - http://localhost/
      - http://ALUMNO.fomentformacio.tech/
  */

  function estoy_en_localhost() {
    // _SERVER["SERVER_NAME"] _SERVER["HTTP_HOST"]
    $dominio = $_SERVER['SERVER_NAME'];
    return $dominio == 'localhost'; // TRUE, FALSE
  }

  function conectar_bd() {
    if (estoy_en_localhost()) {
      $pdo = new PDO('mysql:host=localhost;dbname=bd_mesozoico', 'root', '');
    } else { // Estoy en mi servidor remoto
      $pdo = new PDO('mysql:host=localhost;dbname=12345678A_mesozoico', '12345678A_dino', 'mesozoico');
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET UTF8");
    return $pdo; // PDO
  }

  function lista_dinosaurios($pdo) {
    $sql = "SELECT * FROM dinosaurios ORDER BY nombre";
    $tabla = $pdo->query($sql);
    return $tabla; // PDOStatement
  }

  echo "<h1>Dinosaurios en ".$_SERVER['SERVER_NAME']."</h1>";
  $pdo = conectar_bd();
  $tabla = lista_dinosaurios($pdo);
  foreach ($tabla as $row) {
    echo $row['nombre'].'<br>';
  }
