<?php
/*
  Funciones para usar en el backend
*/

function conectar_bd() {
  $conexion = 'mysql:host=localhost;dbname=bd_backend';
  $pdo = new PDO($conexion, 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("SET CHARACTER SET UTF8");
  return $pdo;
}

function conectar_usuario($user, $pass) {
  $id = get_user_id($user, $pass);
  @session_start();
  $_SESSION['user_id'] = $id;
  return $id;
}
function get_user_id($user, $pass) {
  $pdo = conectar_bd();
  $tabla = $pdo->prepare("SELECT getUserId(?, ?)");
  $tabla->execute(array($user, $pass));
  $row = $tabla->fetch();
  $id = $row[0];
  return $id;
}
/*// Prueba
echo conectar_usuario('pepe', 'pepe'); // 1
echo conectar_usuario('pepa', 'pepa'); // 2
echo conectar_usuario('pepe', 'xxx'); // 0
*/

function acceso_restringido() {
  @session_start();
  if (empty($_SESSION['user_id'])) {
    header("Location: prohibido.php");
    exit();
  }
}

function desconectar_usuario() {
  @session_start();
  $_SESSION['user_id'] = null; // null,0,false,'',undefined
  header("Location: login.php");
  exit();
}

function info_usuario() {
  @session_start();
  $id = $_SESSION['user_id'];
  $pdo = conectar_bd();
  $tabla = $pdo->prepare("CALL queryUser(?)");
  $tabla->execute(array($id));
  $row = $tabla->fetch();
  return $row;
}
// Prueba
////print_r(info_usuario());
