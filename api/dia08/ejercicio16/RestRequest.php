<?php
  // RestRequest.php

  class RestRequest {

    public function getUri() {
      return isset($_SERVER['PATH_INFO'])? $_SERVER['PATH_INFO']:"";
    }
    public function getQueryString() {
      return $_SERVER['QUERY_STRING'];
    }
    public function getMethod() {
      return $_SERVER['REQUEST_METHOD'];
    }
    public function getContent() {
      $json = file_get_contents("php://input");
      $data = json_decode($json, $assoc=true);
      return $data;
    }

    public function getUriItems() {
      $uri = $this->getUri();
      $uri = trim($uri, '/'); // Elimina las / de los extremos
      return explode('/', $uri); // Convierte el string en array
    }
    public function getQueryItems() {
      $query = $this->getQueryString();
      parse_str($query, $assoc);
      return $assoc;
    }

  }
