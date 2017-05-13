<?php
  require_once "rest_functions.php";

  //solucion_con_include();
  //solucion_con_header();
  solucion_con_file_get_contents();

  function solucion_con_include() {
    $uriItems = getUriItems(); // Array indexado
    switch ($uriItems[0]) {
      case 'continentes': // "/continentes"
        include "continentes.json.php";
        break;
      case 'paises':
        if (empty($uriItems[1])) { // "/paises"
          $queryItems = getQueryItems();
          $idCont = intval($queryItems['continente_id']);
          $_GET['continente_id'] = $idCont;
          include "paises.json.php";
        }
        else { // "/paises/1"
          $idPais = intval($uriItems[1]);
          $_GET['id'] = $idPais;
          include "pais.json.php";
        }
        break;
    }
  }

  /*
    Funciona bien pero cambia la URL
  */
  function solucion_con_header() {
    $uriItems = getUriItems(); // Array indexado
    switch ($uriItems[0]) {
      case 'continentes': // "/continentes"
        header("Location: ../continentes.json.php");
        exit;
      case 'paises':
        if (empty($uriItems[1])) { // "/paises"
          $queryItems = getQueryItems();
          $idCont = intval($queryItems['continente_id']);
          header("Location: ../paises.json.php?continente_id=$idCont");
        }
        else { // "/paises/1"
          $idPais = intval($uriItems[1]);
          header("Location: ../../pais.json.php?id=$idPais");
        }
        exit;
    }
  }

  function solucion_con_file_get_contents() {
    $uriItems = getUriItems(); // Array indexado
    //$base = "http://localhost/api/dia09/ejercicio17";
    //SCRIPT_NAME = "/api/dia09/ejercicio17/rest.php";
    $base = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']);
    switch ($uriItems[0]) {
      case 'continentes': // "/continentes"
        $url = "continentes.json.php";
        break;
      case 'paises':
        if (empty($uriItems[1])) { // "/paises?continente_id=1"
          $queryItems = getQueryItems();
          $idCont = isset($queryItems['continente_id'])?
            intval($queryItems['continente_id']) : 0;
          $url = "paises.json.php?continente_id=$idCont";
        }
        else { // "/paises/1"
          $idPais = intval($uriItems[1]);
          $url = "pais.json.php?id=$idPais";
        }
        break;
      default:
        $data = array('error'=>"Incorrecto o no implementado");
        $json = json_encode($data);
    }
    if (isset($url)) $json = file_get_contents("$base/$url");
    header("Content-Type: application/json");
    echo $json;
  }
