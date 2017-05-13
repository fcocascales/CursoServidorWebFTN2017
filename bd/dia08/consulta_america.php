<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Consulta América</title>
</head>
<body>
<h1>Consulta América</h1>
<?php
  $host = "localhost";
  $db   = "bd_mundo";
  $user = "root";
  $pass = "";

  $sql = "SELECT p.pais, COUNT(*) AS num_idiomas
  FROM paises p
    INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
  WHERE p.continente_id = 2
  GROUP BY 1
  ORDER BY 2 DESC, 1;";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->exec("SET CHARACTER SET UTF8");

    $table = $pdo->query($sql);
    foreach ($table as $row) {
      echo "<p><strong>"
        .$row['pais']."</strong> &rarr; "
        .$row['num_idiomas']." idiomas</p>";
    }

  }
  catch (Exception $ex) {
    die("ERROR: No hay conexión");
  }
?>
</body>
</html>
