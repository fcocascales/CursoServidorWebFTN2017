<?php

  require_once "RestRequest.php";
  require_once "RestResponse.php";

  $request = new RestRequest();
  $response = new RestResponse();

  $data = array(
    'uri'=> $request->getUri(),
    'uriItems'=> $request->getUriItems(),
    'queryString'=> $request->getQueryString(),
    'queryItems'=> $request->getQueryItems(),
    'method'=> $request->getMethod(),
    'content'=> $request->getContent(),
  );

  $response->setContent($data);
  $response->send();
