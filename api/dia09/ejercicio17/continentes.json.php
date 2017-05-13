<?php

  // INIT
  $connection = "mysql:host=localhost;dbname=bd_mundo";
  $sql = "SELECT id, continente AS nombre
    FROM continentes
    ORDER BY 2";

  // DATABASE
  $pdo = new PDO($connection, $user="root", $pass="");
  $pdo->exec("SET CHARACTER SET UTF8");

  // QUERY
  $table = $pdo->query($sql);
  $array = $table->fetchAll(PDO::FETCH_ASSOC);

  // JSON
  $json = json_encode($array, JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
  header("Content-Type: application/json");
  echo $json;
