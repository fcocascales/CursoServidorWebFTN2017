<?php // dia07/funciones.php

  function enlace($title, $link) {
    return "<a href=\"$link\">$title</a>";
  }
  function resaltado($texto) {
    return "<strong>$texto</strong>";
  }
  function lista(...$params) {
    return listaArray($params);
  }
  function listaArray($array) {
    $html = "<ul>"; // Lista de viñetas
    foreach ($array as $item) {
      $html .= "<li>$item</li>";
    }
    $html .= "</ul>";
    return $html;
  }
  function listaArray2($array) {
    return "<ul><li>".implode("</li><li>", $array)."</li></ul>";
  }

  // Soluciones del ejercicio

  function titulo($texto, $num=1) {
    return "<h$num>$texto</h$num>";
  }

  function listaEnlaces($assoc) {
    $html = "<ul>";
    foreach ($assoc as $text => $link) {
      $html .= "<li><a href=\"$link\">$text</a></li>";
    }
    $html .= "</ul>";
    return $html;
  }

  function listaEnlaces2($assoc) {
    $html = "<ul>";
    foreach ($assoc as $text => $link) {
      $html .= "<li>".enlace($text, $link)."</li>";
    }
    $html .= "</ul>";
    return $html;
  }

  function listaEnlaces3($assoc) {
    $lista = array();
    foreach ($assoc as $text=>$link) {
      $lista[] = enlace($text, $link);
    }
    return listaArray($lista);
  }


  // end
