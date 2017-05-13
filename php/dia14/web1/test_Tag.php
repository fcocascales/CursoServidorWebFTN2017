<?php

require_once "Tag.php";

$strong = new Tag('strong'); // <strong></strong>
$div = new Tag('div', array('id'=>"main")); // <div id="main"></div>

// <a href="http://www.google.com" class="menu">Buscador</a>
$attrs = array(
  'href'=> "http://www.google.com",
  'class'=> "menu",
);
$a = new Tag('a', $attrs, 'Buscador');

$strong->setContent("Hola");
$div->setContent("Contenedor");
$div->setAttr("class", "container");
$a->setAttr("href", "http://proinf.net");

echo $strong->toString();
echo $div->toString();
echo $a->toString();
