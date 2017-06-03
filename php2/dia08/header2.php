<?php // http://localhost/php2/dia08/header2.php

// Una redirección
$azar = rand(0,3);

switch($azar) {
  case 0: header("Location: http://google.com"); break;
  case 1: header("Location: http://php.net"); break;
  case 2: header("Location: http://wikipedia.org"); break;
  case 3: header("Location: https://www.w3schools.com/"); break;
}
