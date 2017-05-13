<?php
  // 1) Recuperar el parámetro id de la URL
  $id = isset($_GET['id'])? intval($_GET['id']) : 0;
  if ($id == 0) die("Falta el parámetro URL id");

  // 2) Obtener el nombre del dinosaurio
  $host = "localhost";
  $db   = "bd_mesozoico";
  $user = "root";
  $pass = "";

  $sql = "SELECT nombre FROM dinosaurios WHERE id = $id ";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET UTF8");

    $table = $pdo->query($sql);
    $row = $table->fetch();
    $nombre = $row['nombre'];

    $nombre = htmlspecialchars($nombre);
    $mensaje = "¿Estás seguro que deseas eliminar
            al dinosaurio <strong>$nombre</strong>?";
  }
  catch (Exception $ex) {
    die("ERROR: No hay conexión");
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Borrar dinosaurio</title>
</head>
<body>
  <h1>Confirmar el borrado del dinosaurio</h1>
  <form action="borrar_bd.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <p><?php echo $mensaje ?></p>
    <p><button>Borrar</button></p>
  </form>
  <p>
    <a href="listado.php">Volver al listado de dinosaurios</a>
  </p>
</body>
</html>
