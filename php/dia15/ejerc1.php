<?php

function func1($a) {
  return array($a, $a+2, $a*2, $a*$a);
}
echo "<pre>"; // preformateado. Es útil para print_r y var_dump
$v = func1(2);
print_r($v); // 2, 4, 4, 4
$v = func1(3);
var_dump($v); // 3, 5, 6, 9
list($num, $suma, $doble, $cuadrado) = func1(4);
echo "$num $suma $doble $cuadrado"; // 4 6 8 16
