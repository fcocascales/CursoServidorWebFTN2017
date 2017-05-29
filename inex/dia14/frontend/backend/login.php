<?php
  require_once "../lib/conexion.php";

  $hayError = false;

  if (!empty($_POST['usuario'])) {

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $sql = "SELECT id, nombre
      FROM usuarios
      WHERE usuario = ?
        AND clave = SHA1(?)
        AND activado = TRUE";
    $row = Conexion::queryRow($sql, $usuario, $clave);

    if ($row === false) $hayError = true;
    else {
      session_start();
      $_SESSION['usuario_id'] = $row['id'];
      $_SESSION['usuario_nombre'] = $row['nombre'];
      header("Location: index.php");
      exit;
    }
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <title>Conexión</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
  <div id="fondo"></div>
  <main>
    <section>
      <h1>Conexión al backend</h1>
      <?php if ($hayError) echo '<p class="error">Usuario incorrecto</p>'; ?>
      <form method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" maxlength="16" autofocus>
        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" maxlength="50">
        <button>Entrar</button>
      </form>
      <p><a href="#">¿Te has olvidado de la contraseña?</a></p>
    </section>
  </main>
</body>
</html>
