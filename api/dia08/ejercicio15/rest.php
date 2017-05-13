<?php
  // rest.php

  $host = array(
    'protocol'=> $_SERVER['SERVER_PROTOCOL'], // http o https
    'domain'=> $_SERVER['SERVER_NAME'], // localhost o alumno.fomentformacio.tech
    'server'=> basename($_SERVER['SCRIPT_NAME']), // rest.php
    'script'=> $_SERVER['SCRIPT_NAME'], // /api/dia08/ejercicio15/rest.php
  );

  $request = array(
    'uri'=> isset($_SERVER['PATH_INFO'])? $_SERVER['PATH_INFO']:"", // mundo/paises/2
    'query'=> $_SERVER['QUERY_STRING'], // ?continente_id=1
    'method'=> $_SERVER['REQUEST_METHOD'], // GET, POST, PUT, DELETE
    'mime'=> isset($_SERVER["CONTENT_TYPE"])? $_SERVER["CONTENT_TYPE"]:"", // application/json  application/xml
    'content'=> file_get_contents("php://input"), // Los datos codificados en JSON o XML
  );

  $datos = array(
    'title'=> "El Mundo con REST",
    'author'=> "Pepe",
    'version'=> 1,
    'host'=> $host,
    'request'=> $request,
    'server'=> $_SERVER,
  );

  $json = json_encode($datos,
    JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
  header("Content-Type: application/json");
  echo $json;
