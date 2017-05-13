<?php

  require_once "Bucle.php";

  echo "<h1>Bucle</h1>";

  echo "<h2>Bucle::imprimir</h2>";

  $bucle = new Bucle();
  $bucle->setInicio(1);
  $bucle->setFinal(10);
  $bucle->setPaso(2);
  echo "<h3>$bucle</h3>";
  $bucle->imprimir(); // 1, 3, 5, 7, 9

  $bucle = new Bucle();
  $bucle->setInicio(100);
  $bucle->setFinal(104);
  $bucle->setPaso(1);
  echo "<h3>$bucle</h3>";
  $bucle->imprimir(); // 100, 101, 102, 103, 104

  try {
    $infinito = new Bucle(0, 10, 0);
    echo "<h3>$infinito</h3>";
    $infinito->imprimir();
  } catch (Exception $ex) {
    echo $ex->getMessage();
  }

  $bucle = new Bucle(10, 0, 1);
  echo "<h3>$bucle</h3>";
  $bucle->imprimir();

  $bucle = new Bucle(10, 0, -1);
  echo "<h3>$bucle</h3>";
  $bucle->imprimir();

  $bucle = new Bucle(0.2, 0.8, 0.1);
  echo "<h3>$bucle</h3>";
  $bucle->imprimir();

  $bucle = new Bucle('1a', '4b', '1c');
  echo "<h3>$bucle</h3>";
  $bucle->imprimir();

  echo "<h2>Bucle::getArray</h2>";

  $bucle = new Bucle(-10, 10, 0.5);
  echo "<h3>$bucle</h3>";
  echo implode("|", $bucle->getArray());

  echo "<h2>Bucle::siguiente</h2>";

  $bucle = new Bucle(-10,-1,0.9);
  echo "<h3>$bucle</h3>";
  while ($bucle->siguiente($valor)) {
    echo "[$valor]";
  }

  $bucle0 = new Bucle(1, 2, 0.5);
  $bucle1 = new Bucle(1, 10, 2);
  $bucle2 = new Bucle(100, 120, 3);
  echo "<h3>$bucle0<br>$bucle1<br>$bucle2</h3>";
  while(true) {
    $ok0 = $bucle0->siguiente($valor0);
    $ok1 = $bucle1->siguiente($valor1);
    $ok2 = $bucle2->siguiente($valor2);
    if ($ok0 || $ok1 || $ok2)
      echo ($ok0?$valor0:'')." : ".
           ($ok1?$valor1:'')." : ".
           ($ok2?$valor2:'').'<br>';
    else break;
  }
