<?php
  /*
    Tag.php
    Una clase base para las etiquetas HTML

      "<Nombre Atributos>Contenido</Nombre>"
  */
  class Tag {
    private $name; // Texto
    private $attrs; // Array asociativo
    private $content; // Textos o etiquetas

    public function __construct($name, $attrs=array(), $content="") {
      $this->name = $name;
      $this->attrs = $attrs;
      $this->content = $content;
    }

    public function toString() {
      // Ejercicio 1
      $attrs = $this->attrsToString();
      $html = "<".$this->name.$attrs.">"; // <div>
      $html .= $this->content;
      $html .= "</".$this->name.">"; // </div>
      return $html;
    }

    private function attrsToString() {
      $text = "";
      foreach($this->attrs as $key=>$value) {
        $text .= " $key=\"$value\"";
      }
      return $text;
    }

    // Pone un nuevo contenido
    public function setContent($value) {
      // Ejercicio 2
      $this->content = $value;
    }

    // Modificar atributos existentes
    // Añade nuevos atributos
    public function setAttr($name, $value) {
      // Ejercicio  3
      ////if (!array_key_exists($name, $this->attrs))
      $this->attrs[$name] = $value;
    }

  } // Fin de la clase

//-----------------------------------------------








  // Fin
