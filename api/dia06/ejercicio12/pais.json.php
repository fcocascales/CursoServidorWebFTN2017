<?php

  // INPUT
  $id = isset($_GET['id'])? intval($_GET['id']): 0;

  // INIT
  $connection = "mysql:host=localhost;dbname=bd_mundo";
  $sql = "SELECT p.id, p.pais AS nombre, p.capital,
      p.moneda, c.continente, p.poblacion, p.extension
    FROM paises p
      INNER JOIN continentes c ON p.continente_id = c.id
    WHERE p.id = ?";

  // DATABASE
  $pdo = new PDO($connection, $user="root", $pass="");
  $pdo->exec("SET CHARACTER SET UTF8");

  // QUERY
  $table = $pdo->prepare($sql);
  $table->execute(array($id)); // Sustituye el ? del SQL
  $array = $table->fetchAll(PDO::FETCH_ASSOC);

  // ARRAY
  $result = empty($array)? $array : $array[0];

  // JSON
  $json = json_encode($result, JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
  header("Content-Type: application/json");
  echo $json;
