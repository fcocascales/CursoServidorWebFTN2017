<?php
  // TEST SERVER

  require_once "rest_server.php";

  // Client Request
  $uri = getUri();
  $query = getQueryString();
  $method = getMethod();
  $content = getContent();

  // Elaborar la respuesta
  $suma = $content['operando1'] + $content['operando2'];
  $response = array(    
    'datetime'=> date('Y-m-d H:i:s'),
    'suma'=> $suma,
    'request'=> array(
      'uri'=>$uri,
      'query'=>$query,
      'method'=> $method,
      'content'=> $content
    )
  );

  // Enviar respuesta
  sendResponse($response);
