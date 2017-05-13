<?php
  // TEST CLIENT

  require_once "rest_client.php"; // send_json_request

  $server = "http://localhost/api/dia10/ejercicio20/test_server.php";
  $uri = "/calculo/suma";
  $query = "?id=100";

  $array = array(
    'operando1'=> 100,
    'operando2'=> 200
  );

  $url = "$server$uri$query";
  $method = "PUT"; // GET, POST, PUT, DELETE
  $content = json_encode($array);

  echo "<h2>Request</h2>";
  echo "<p>URL: $url</p>";
  echo "<p>METHOD: $method</p>";
  echo "<p>CONTENT: $content</p>";

  $response = send_json_request($url, $method, $content);

  echo "<h2>Response</h2>";
  echo "<pre>$response</pre>";
