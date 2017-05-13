<?php

  // INPUT
  $id = isset($_GET['id'])? intval($_GET['id']): 0;

  // INIT
  $connection = "mysql:host=localhost;dbname=bd_mundo";
  $sql1 = "SELECT p.id, p.pais AS nombre, p.capital,
      p.moneda, c.continente, p.poblacion, p.extension
    FROM paises p
      INNER JOIN continentes c ON p.continente_id = c.id
    WHERE p.id = ?";
  $sql2 = "SELECT i.idioma
    FROM pais_idiomas pi
      INNER JOIN idiomas i ON pi.idioma_id = i.id
    WHERE pi.pais_id = ?
    ORDER BY 1";
  $sql3 = "SELECT p.id, p.pais AS nombre
    FROM pais_vecinos pv
      INNER JOIN paises p ON pv.vecino_id = p.id
    WHERE pv.pais_id = ?
    ORDER BY 2";

  // DATABASE
  $pdo = new PDO($connection, $user="root", $pass="");
  $pdo->exec("SET CHARACTER SET UTF8");

  // QUERY 1
  $table = $pdo->prepare($sql1);
  $table->execute(array($id)); // Sustituye el ? del SQL
  $array1 = $table->fetchAll(PDO::FETCH_ASSOC);

  // QUERY 2
  $table = $pdo->prepare($sql2);
  $table->execute(array($id)); // Sustituye el ? del SQL
  $array2 = $table->fetchAll(PDO::FETCH_COLUMN);

  // QUERY 3
  $table = $pdo->prepare($sql3);
  $table->execute(array($id)); // Sustituye el ? del SQL
  $array3 = $table->fetchAll(PDO::FETCH_ASSOC);

  // ARRAYS
  if (empty($array1)) {
    $result = $array1;
  } else {
    $result = $array1[0];
    $result['idiomas'] = $array2;
    $result['vecinos'] = $array3;
  }

  // JSON
  $json = json_encode($result, JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
  header("Content-Type: application/json");
  echo $json;
