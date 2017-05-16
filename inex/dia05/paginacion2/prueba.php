<?php

  require_once "conexion.php";

  $pdo = conexion();

  $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM pedidos
    WHERE YEAR(fecha_pedido)=1997 LIMIT 0, 10";
  $sql2 = "SELECT FOUND_ROWS()";

  $result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
  $total = $pdo->query($sql2)->fetch()[0];

  echo "<pre>";
  print_r($result);
  print_r($total);
  echo "</pre>";

 ?>
