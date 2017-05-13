<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lista de dinosaurios</title>
</head>
<body>
<h1>Lista de dinosaurios</h1>
<?php
  $host = "localhost";
  $db   = "bd_mesozoico";
  $user = "root";
  $pass = "";

  $sql = "SELECT id, nombre FROM dinosaurios ORDER BY 2";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET UTF8");

    $table = $pdo->query($sql);
    echo "<ul>";
    foreach ($table as $row) {
      $id = $row['id'];
      $nombre = htmlspecialchars($row['nombre']);
      echo "<li>";
      echo "<small>($id)</small> ";
      echo "<big>$nombre</big> |";
      echo " <a href=\"ficha.php?id=$id\">ficha</a> |";
      echo " <a href=\"modificar.php?id=$id\">modificar</a> |";
      echo " <a href=\"borrar.php?id=$id\">borrar</a> |";
      echo "</li>";
    }
    echo "</ul>";

  }
  catch (Exception $ex) {
    die("ERROR: No hay conexión");
  }
?>
<p>
  <a href="insertar.php">Añadir un nuevo dinosaurio</a>
</p>
</body>
</html>
