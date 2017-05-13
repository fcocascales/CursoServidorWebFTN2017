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
    $pdo->exec("SET CHARACTER SET UTF8");

    $table = $pdo->query($sql);
    echo "<ul>";
    foreach ($table as $row) {
      echo "<li><small>("
        .$row['id'].")</small> <big> "
        .$row['nombre']." </big></li>";
    }
    echo "</ul>";

  }
  catch (Exception $ex) {
    die("ERROR: No hay conexión");
  }
?>
</body>
</html>
