<?php
  // Convertir a XML mediante la clase *SimpleXMLElement*

  require_once "factura.php";

  // Tipo de datos MIME: "application/xml"
  header("Content-Type: application/xml");
  //header("Content-Type: text/plain");

  // Paso 1
  /*$sxe = new SimpleXMLElement("<factura />");
  echo $sxe->asXML();*/

  // Paso 2
  /*$sxe = new SimpleXMLElement("<factura />");
  extract($factura); // $numero, $cliente, $fecha, $iva, $detalles
  $sxe->addAttribute("numero", $numero);
  $sxe->addAttribute("cliente", $cliente);
  $sxe->addAttribute("fecha", $fecha);
  $sxe->addAttribute("iva", $iva);
  echo $sxe->asXML();*/

  $sxe = new SimpleXMLElement("<factura />");
  extract($factura); // $numero, $cliente, $fecha, $iva, $detalles
  $sxe->addAttribute("numero", $numero);
  $sxe->addAttribute("cliente", $cliente);
  $sxe->addAttribute("fecha", $fecha);
  $sxe->addAttribute("iva", $iva);
  foreach($detalles as $detalle) {
    extract($detalle); // $producto, $unidades, $precio
    $sxeProducto = $sxe->addChild("producto", $producto);
    $sxeProducto->addAttribute("unidades", $unidades);
    $sxeProducto->addAttribute("precio", $precio);
  }
  echo $sxe->asXML();
