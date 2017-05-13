<?php

  $conexion = "mysql:host=localhost;dbname=bd_semaforo";
  $pdo = new PDO($conexion, 'root', 'cascales');
  $pdo->exec("SET CHARACTER SET UTF8");

  function selectIdActual($pdo) {
    $sql = "SELECT id FROM semaforos WHERE actual IS TRUE";
    $table = $pdo->query($sql);
    $row = $table->fetch();
    return $row['id'];
  }
  function getIdSiguiente($id) {
    if (++$id > 3) $id = 1;
    return $id;
  }
  function updateActual($pdo, $id) {
    $sql = "UPDATE semaforos SET actual = (id=?)";
    $table = $pdo->prepare($sql);
    $table->execute(array($id));
  }
  function selectNuevaHora($pdo, $id) {
    $sql = "SELECT DATE_ADD(hora, INTERVAL duracion SECOND) FROM semaforos WHERE id=?";
    $table = $pdo->prepare($sql);
    $table->execute(array($id));
    $row = $table->fetch();
    return $row[0];
  }
  function updateHora($pdo, $id, $hora) {
    $sql = "UPDATE semaforos SET hora=? WHERE id=?";
    $table = $pdo->prepare($sql);
    $table->execute(array($hora, $id));
  }

  $id1 = selectIdActual($pdo);
  $id2 = getIdSiguiente($id1);
  $id3 = getIdSiguiente($id2);
  updateActual($pdo, $id2);
  $hora = selectNuevaHora($pdo, $id3);
  updateHora($pdo, $id1, $hora);

  echo "<p>id1=$id1</p>";
  echo "<p>id2=$id2</p>";
  echo "<p>id3=$id3</p>";
  echo "<p>hora=$hora</p>";
