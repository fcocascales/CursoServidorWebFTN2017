<?php

  // rest_functions.php

  function getUri() {
    return isset($_SERVER['PATH_INFO'])? $_SERVER['PATH_INFO']:"";
  }
  function getQueryString() {
    return $_SERVER['QUERY_STRING'];
  }
  function getMethod() {
    return $_SERVER['REQUEST_METHOD'];
  }
  function getContent() {
    $json = file_get_contents("php://input");
    $data = json_decode($json, $assoc=true);
    return $data;
  }

  function getUriItems() {
    $uri = getUri();
    $uri = trim($uri, '/'); // Elimina las / de los extremos
    return explode('/', $uri); // Convierte el string en array
  }
  function getQueryItems() {
    $query = getQueryString();
    parse_str($query, $assoc);
    return $assoc;
  }

  function sendResponse($data) {
    $json = json_encode($data,
      JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
    header("Content-Type: application/json");
    echo $json;
  }
