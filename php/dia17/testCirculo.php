<?php
/*
  1 punto = require_once y por new
  1 punto = Probar todos los métodos
  1 punto = Si funciona sin errores
  Más puntos = Por características extra
*/
  require_once "Circulo.php";

  // http://localhost/dia17/testCirculo.php?radio=23
  $radio = isset($_GET['radio'])? floatval($_GET['radio']): 1;

  // Creando el objeto Circulo
  // Inicializando el objeto llamando a su constructor
  // La variable $obj1 está apuntando al objeto
  $obj1 = new Circulo($radio);

  echo "<h1>Prueba de la clase Circulo</h1>";

  echo "<h2>Prueba 1</h2>";
  echo "Radio=". $obj1->getRadio();
  echo "<br>Circunferencia=". $obj1->getCircunferencia();
  echo "<br>Área=". $obj1->getArea();

  echo "<h2>Prueba 2</h2>";
  $obj1->setRadio(2);
  echo "Radio=". $obj1->getRadio();
  echo "<br>Circunferencia=". $obj1->getCircunferencia();
  echo "<br>Área=". $obj1->getArea();


?>
