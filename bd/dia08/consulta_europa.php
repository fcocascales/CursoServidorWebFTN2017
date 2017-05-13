<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Consulta Europa</title>
</head>
<body>
<h1>Consulta Europa</h1>
<?php
  $host = "localhost";
  $db   = "bd_mundo";
  $user = "root";
  $pass = "";

  $sql = "SELECT pais, capital, poblacion
  FROM paises
  WHERE continente_id = 4
  ORDER BY pais";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->exec("SET CHARACTER SET UTF8");

    $table = $pdo->query($sql);
    foreach ($table as $row) {
      echo "<p><strong>"
        .$row['pais']."</strong><br>"
        .$row['capital']."<br>"
        .$row['poblacion']."</p>";
    }

  }
  catch (Exception $ex) {
    die("ERROR: No hay conexión");
  }
?>
</body>
</html>
