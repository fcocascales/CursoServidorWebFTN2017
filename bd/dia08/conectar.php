<?php

  echo "<h1>Ejemplo de conexión con una BD usando PDO</h1>";

  $host = "localhost";
  $db   = "bd_mundo";
  $user = "root";
  $pass = "";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Conexión establecida";
  }
  catch (Exception $ex) {
    die("ERROR: No hay conexión");
  }
