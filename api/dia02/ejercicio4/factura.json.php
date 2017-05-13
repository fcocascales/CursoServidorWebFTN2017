<?php
  require_once "factura.php";

  header("Content-Type: application/json");

  $json = json_encode($factura, JSON_PRETTY_PRINT);

  echo $json;
