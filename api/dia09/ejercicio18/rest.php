<?php
  require_once "rest_functions.php";

  principal();

  function principal() {
    $uriItems = getUriItems();
    if (!count($uriItems)) return error("No hay URI");
    switch ($uriItems[0]) {
      case 'continentes': // "/continentes"
        if (count($uriItems) > 1) return error("URI incorrecta");
        return file_json("continentes.json.php");
      case 'paises':
        if (empty($uriItems[1])) { // "/paises?continente_id=1"
          $queryItems = getQueryItems();
          if (empty($queryItems['continente_id'])) return error("Falta continente_id");
          $idCont = intval($queryItems['continente_id']);
          return file_json("paises.json.php?continente_id=$idCont");
        }
        else { // "/paises/1"
          if (count($uriItems) > 2) return error("URI incorrecta");
          $idPais = intval($uriItems[1]);
          return file_json("pais.json.php?id=$idPais");
        }
        break;
      default:
        return error("Incorrecto o no implementado");
    }
  }

  function file_json($url) {
    $base = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']);
    $json = file_get_contents("$base/$url");
    send($json);
  }

  function error($message) {
    $data = array('error'=>$message);
    sendResponse($data);
  }

  function send($json) {
    header("Content-Type: application/json");
    echo $json;
  }
