<?php

  // INPUT
  $connection = "mysql:host=localhost;dbname=bd_mesozoico";
  $sql = "SELECT nombre, longitud
      FROM dinosaurios
        INNER JOIN dietas ON dieta_id = dietas.id
      WHERE dieta = 'herbivoro'
      ORDER BY nombre";

  // DATABASE
  $pdo = new PDO($connection, $user='root', $pass='');
  $pdo->exec("SET CHARACTER SET UTF8");
  $table = $pdo->query($sql);
  $array = $table->fetchAll(PDO::FETCH_ASSOC);

  // JSON
  $json = json_encode($array, JSON_PRETTY_PRINT);
  header("Content-Type: application/json");
  echo $json;
