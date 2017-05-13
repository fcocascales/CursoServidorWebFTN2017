<?php
  echo "<h1>Mostrar la tabla continentes</h1>";

  $host = "localhost";
  $db   = "bd_mundo";
  $user = "root";
  $pass = "";

  // Una consulta SELECT guardada como un string en PHP
  //   Es muy conveniente probar antes que la consulta
  //   en el phpMyAdmin para ver si va bien.
  //
  $sql = "SELECT id, continente
  FROM continentes
  ORDER BY 2";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "<p>Conexión establecida</p>";

    // A partir de la conexión ($pdo) a la BD realizamos
    //   una consulta (query) pasando la sentencia SQL.
    // El resultado es un array de filas ($table).
    // Cada fila ($row) es un array asociativo de los campos.
    // Podemos acceder a los campos id y continente
    //  especificados en el SELECT de la sentencia SQL.
    //
    $table = $pdo->query($sql);
    foreach ($table as $row) {
      echo $row['id'];
      echo " ";
      echo $row['continente'];
      echo "<br>";
    }

  }
  catch (Exception $ex) {
    die("ERROR: No hay conexión");
  }
