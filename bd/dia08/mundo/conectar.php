<?php

  echo "<h1>Ejemplo de conexión con una BD usando PDO</h1>";

  $host = "localhost"; // Servidor donde se encuentra MySQL
  $db   = "bd_mundo"; // Nombre de la base de datos
  $user = "root"; // Usuario de conexión a MySQL
  $pass = ""; // Contraseña del usuario

  try {
    // Creación del objeto que mantiene la conexión a la BD
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Conexión establecida";
  }
  catch (Exception $ex) {
    die("ERROR: No hay conexión"); 
  }
