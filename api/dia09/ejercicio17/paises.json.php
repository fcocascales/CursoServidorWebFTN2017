<?php

  // INPUT
  $continente_id = isset($_GET['continente_id'])? intval($_GET['continente_id']): 0;

  // INIT
  $connection = "mysql:host=localhost;dbname=bd_mundo";
  $sql = "SELECT id, pais AS nombre
    FROM paises
    WHERE continente_id = ?
    ORDER BY 2";

  // DATABASE
  $pdo = new PDO($connection, $user="root", $pass="");
  $pdo->exec("SET CHARACTER SET UTF8");

  // QUERY
  $table = $pdo->prepare($sql);
  $table->execute(array($continente_id)); // Sustituye el ? del SQL
  $array = $table->fetchAll(PDO::FETCH_ASSOC);

  // JSON
  $json = json_encode($array, JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
  header("Content-Type: application/json");
  echo $json;
