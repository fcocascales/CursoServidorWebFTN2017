<?php

  require_once "curso.php";

  header("Content-Type: application/xml");

  $sxe = new SimpleXMLElement('<curso/>');
  array_to_xml($curso, $sxe);
  echo $sxe->asXML();

  function array_to_xml($data, $sxe) {
    foreach ($data as $key=>$value) {
      if (is_numeric($key)) {
        $key = 'item'; //.$key; //dealing with <0/>..<n/> issues
      }
      if (is_array($value)) {
        $subnode = $sxe->addChild($key);
        array_to_xml($value, $subnode);
      } else {
        $sxe->addChild("$key", htmlspecialchars("$value"));
      }
    }
  }
