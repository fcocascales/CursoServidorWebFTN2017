<?php
  /*
    TagA.php

    Etiqueta
      <a href="direccion">texto</a>

    Reciclar la clase Tag. Se puede hacer con la herencia.
    La herencia se utiliza para aprovechar todo el código
    de otra clase.
  */
  require_once "Tag.php";

  class TagA extends Tag {

    public function __construct($href, $text) {
      parent::__construct("a");
      $this->setAttr('href', $href);
      $this->setContent($text);
    }

  }
