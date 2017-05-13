<?php
  // TEST SERVER

  require_once "rest_server.php";

  // Client Request
  $uri = getUri();
  $query = getQueryString();
  $method = getMethod();
  $content = getContent();

  // Elaborar la respuesta
  $response = array(
    'datetime'=> date('Y-m-d H:i:s'),
    'request'=> array(
      'uri'=>$uri,
      'query'=>$query,
      'method'=> $method,
      'content'=> $content
    )
  );

  // Enviar respuesta
  sendResponse($response);
