<?php

  $conn = "mysql:host=localhost;dbname=bd_neptuno";
  $pdo = new PDO($conn, "root", "");

  $sql = "SELECT * FROM clientes LIMIT 0, 10";
  $sql = "SELECT * FROM clientes LIMIT 100, 10";
  $stat = $pdo->query($sql);

  echo "<pre>";
  print_r($stat);

  foreach($stat as $row) {
    print_r($row);
    break;
  }

  echo "<p>count: ".$stat->rowCount()."</p>";


 ?>
