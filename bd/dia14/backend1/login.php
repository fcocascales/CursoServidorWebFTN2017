<?php
  require_once "backend.php";

  $user = isset($_POST['user'])? $_POST['user'] : '';
  $pass = isset($_POST['pass'])? $_POST['pass'] : '';

  if (!empty($user) && !empty($pass)) {
    if (conectar_usuario($user, $pass)) {
      header("Location: index.php");
    }
    else {
      header("Location: prohibido.php");
    }
    exit();
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Conexión</title>
  <style media="screen">
    body { background-color:#9ff; }
    fieldset { display:inline-block; }
    label { display:inline-block; width:6em; }
  </style>
</head>
<body>
  <h1>Conexión al backend</h1>
  <form action="" method="post">
    <fieldset>
      <legend>Autenticación</legend>
      <p>
        <label for="user">Usuario:</label>
        <input type="text" name="user" id="user">
      </p>
      <p>
        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass">
      </p>
      <button>Conectar</button>
    </fieldset>
    <p>
      Los usuarios válidos son (pepe, pepe) o (pepa, pepa)
    </p>
  </form>
</body>
</html>
