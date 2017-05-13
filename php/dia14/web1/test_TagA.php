<?php

require_once "TagA.php";

$a = new TagA('http://wikipedia.org', 'Enciclopedia');
echo $a->toString();
