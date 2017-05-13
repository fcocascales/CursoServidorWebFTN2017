<?php
  // 1) Recuperar el parámetro id del formulario
  $id = isset($_POST['id'])? intval($_POST['id']) : 0;
  if ($id == 0) die("Falta el parámetro POST id");

  $host = "localhost";
  $db   = "bd_mesozoico";
  $user = "root";
  $pass = "";

  $sql = "DELETE FROM dinosaurios WHERE id = ?";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET UTF8");

    $sentence = $pdo->prepare($sql);
    $sentence->execute(array($id));

    header("Location: listado.php");    
  }
  catch (Exception $ex) {
    $mensaje = "ERROR ".$ex->getCode().": ".$ex->getMessage();
  }
