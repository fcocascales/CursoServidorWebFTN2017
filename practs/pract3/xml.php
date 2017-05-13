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

  header("Content-Type: application/xml");
  echo '<?xml version="1.0" encoding="UTF-8"?>';
  echo '<semaforo>';
  echo "<actual id=\"$id\" />";
  echo '<secuencia>';
  foreach ($array as $row) {
    extract($row); // $estado, $duracion, $hora
    echo "<estado duracion=\"$duracion\" hora=\"$hora\">$estado</estado>";
  }
  echo '</secuencia>';
  echo '</semaforo>';

