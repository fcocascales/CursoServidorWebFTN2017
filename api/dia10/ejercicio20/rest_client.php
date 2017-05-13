<?php
  /*
    Parámetros:
      $url     : "https://maps.googleapis.com/maps/api/geocode/json?address=Barcelona"
      $method  : "GET", "POST", "PUT", "DELETE"
      $content : '', '{"code":100}'

    Retorna:
      La respuesta del servidor
  */
  function send_json_request($url, $method="GET", $content="") {
    $mime = "application/json";
    $header = array(
      "Content-Type: $mime", // El tipo de datos que envía el cliente
      "Accept: $mime", // El tipo de datos que acepto del servidor
      "Content-Length: ".strlen($content), // Longitud del contenido
    );
    $options = array(
      'http' => array(
        'header'  => implode("\r\n", $header), // header
        'method'  => $method, // Método de envío
        'content' => $content, // El contenido: JSON, XML
      ),
    );
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    return $response;
  }

  /*
    Parámetros:
      $server  : "https://maps.googleapis.com"
      $uri     : "/maps/api/geocode/json"
      $query   : "?address=Barcelona"
      $method  : "GET", "POST", "PUT", "DELETE"
      $mime    : "application/json", "application/xml"
      $content : '', '{"code":100}'

    Retorna:
      La respuesta del servidor
  */
  function send_rest_request(
    $server,
    $uri,
    $query = "",
    $method = "GET",
    $mime = "application/json",
    $content = ""
  ){
    $header = array(
      "Content-Type: $mime", // El tipo de datos que envía el cliente
      "Accept: $mime", // El tipo de datos que acepto del servidor
      "Content-Length: ".strlen($content), // Longitud del contenido
    );
    $options = array(
      'http' => array(
        'header'  => implode("\r\n", $header), // header
        'method'  => $method, // Método de envíó
        'content' => $content, // El contenido: JSON, XML
      ),
    );
    $url = "$server/".trim($uri, "/");
    if (!empty($query)) $url .= "$url?".trim($query, "?");
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    return $response;
  }
