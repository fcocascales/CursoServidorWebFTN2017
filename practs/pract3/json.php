<?php

  $conexion = "mysql:host=localhost;dbname=bd_semaforo";
  $pdo = new PDO($conexion, 'root', 'cascales');
  $pdo->exec("SET CHARACTER SET UTF8");

  $sql = "SELECT estado, duracion, hora FROM semaforos";
  $table = $pdo->query($sql);
  $array = $table->fetchAll(PDO::FETCH_ASSOC);

  $sql = "SELECT id FROM semaforos WHERE actual IS TRUE";
  $table = $pdo->query($sql);
  $row = $table->fetch();
  $id = $row['id'];

  $data = array(
    'actual'=> $id,
    'secuencia'=> $array,
  );

  header("Content-Type: application/json");
  $json = json_encode($data, JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
  echo $json;
