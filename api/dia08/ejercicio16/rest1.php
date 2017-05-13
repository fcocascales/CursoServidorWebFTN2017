<?php

  require_once "rest_functions.php";

  $data = array(
    'uri'=> getUri(),
    'uriItems'=> getUriItems(),
    'queryString'=> getQueryString(),
    'queryItems'=> getQueryItems(),
    'method'=> getMethod(),
    'content'=> getContent(),
  );

  sendResponse($data);
