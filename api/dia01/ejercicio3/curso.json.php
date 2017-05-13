<?php
  require_once "curso.php";

  header("Content-Type: application/json");

  $json = json_encode($curso, JSON_PRETTY_PRINT);

  echo $json;
