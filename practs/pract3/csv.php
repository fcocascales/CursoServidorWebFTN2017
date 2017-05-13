<?php

  $conexion = "mysql:host=localhost;dbname=bd_semaforo";
  $pdo = new PDO($conexion, 'root', 'cascales');
  $pdo->exec("SET CHARACTER SET UTF8");

  $sql = "SELECT id, estado, duracion, hora FROM semaforos";
  $table = $pdo->query($sql);
  $array = $table->fetchAll(PDO::FETCH_ASSOC);

  header("Content-Type: text/plain");
  echo "id;estado;duracion;hora\n";
  foreach ($array as $row) {
    extract($row); // $id, $estado, $duracion, $hora
    echo "$id;$estado;$duracion;$hora\n";
  }
