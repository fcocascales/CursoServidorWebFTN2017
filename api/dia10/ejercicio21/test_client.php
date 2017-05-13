<?php
  // TEST CLIENT

  require_once "rest_client.php"; // send_json_request

  $server = "http://localhost/api/dia10/ejercicio21/test_server.php";
  $uri = "/calculo/suma";
  $query = "?id=100";

  $array = array(
    'operando1'=> rand(0, 10000),
    'operando2'=> rand(0, 10000)
  );

  $url = "$server$uri$query";
  $method = "PUT"; // GET, POST, PUT, DELETE
  $content = json_encode($array);

  echo "<h2>Request</h2>";
  echo "<p>URL: $url</p>";
  echo "<p>METHOD: $method</p>";
  echo "<p>CONTENT: $content</p>";

  $json = send_json_request($url, $method, $content);
  $response = json_decode($json, $assoc=true);

  echo "<h2>Response</h2>";
  echo "<pre>$json</pre>";
  echo "<p>SUMA=".$response['suma']."</p>";
