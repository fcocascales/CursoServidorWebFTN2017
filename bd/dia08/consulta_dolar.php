<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Consulta dólar</title>
</head>
<body>
<h1>Consulta dólar</h1>
<?php
  $host = "localhost";
  $db   = "bd_mundo";
  $user = "root";
  $pass = "";

  $sql = "SELECT pais, moneda
  FROM paises
  WHERE moneda LIKE '%dolar%'
  ORDER BY 1;";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->exec("SET CHARACTER SET UTF8");

    $table = $pdo->query($sql);
    foreach ($table as $row) {
      echo "<p><strong>"
        .$row['pais']."</strong> &rarr; "
        .$row['moneda']."</p>";
    }

  }
  catch (Exception $ex) {
    die("ERROR: No hay conexión");
  }
?>
</body>
</html>
