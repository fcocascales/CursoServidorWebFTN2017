<?php

function conectar_bd() {
  $pdo = new PDO('mysql:host=localhost;dbname=bd_mesozoico', 'mesozoico', 'mesozoico');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("SET CHARACTER SET UTF8");
  return $pdo; // PDO
}

function obtener_dietas($pdo) {
  $sql = "SELECT id, dieta FROM dietas ORDER BY dieta";
  $tabla = $pdo->query($sql);
  return $tabla; // PDOStatement
}

function obtener_dinosaurios($pdo, $dieta_id) {
  $sql = "SELECT id, nombre, longitud
      FROM dinosaurios WHERE dieta_id = ? ORDER BY nombre";
  $tabla = $pdo->prepare($sql);
  $tabla->execute(array($dieta_id));
  return $tabla; // PDOStatement
}

function obtener_nombre_dieta($pdo, $id) {
  $sql = "SELECT dieta FROM dietas WHERE id = ?";
  $tabla = $pdo->prepare($sql);
  $tabla->execute(array($id));
  $row = $tabla->fetch();
  return $row['dieta']; // string
}
