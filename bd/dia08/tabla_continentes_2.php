<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tabla continentes</title>
</head>
<body>
<h1>Mostrar la tabla continentes</h1>
<?php
  $host = "localhost";
  $db   = "bd_mundo";
  $user = "root";
  $pass = "";

  $sql = "SELECT id, continente
  FROM continentes
  ORDER BY 2";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Al ejecutar esta sentencia entramos cambiamos
    //  al juego de caracteres UTF8 para la conexión $pdo
    $pdo->exec("SET CHARACTER SET UTF8");

    $table = $pdo->query($sql);
    foreach ($table as $row) {
      echo $row['id']." ".$row['continente']."<br>";
    }

  }
  catch (Exception $ex) {
    die("ERROR: No hay conexión");
  }
?>
</body>
</html>
