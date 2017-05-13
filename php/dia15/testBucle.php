<?php

  require_once "Bucle.php";

  $bucle1 = new Bucle();
  $bucle1->setInferior(1);
  $bucle1->setSuperior(10);
  $bucle1->setIncremento(2);
  $bucle1->imprimir(); // 1, 3, 5, 7, 9
  echo "<br>";

  $bucle2 = new Bucle();
  $bucle2->setInferior(100);
  $bucle2->setSuperior(104);
  $bucle2->setIncremento(1);
  $bucle2->imprimir(); // 100, 101, 102, 103, 104
  echo "<br>";

  $infinito = new Bucle(0, 10, 0);
  $infinito->imprimir();
  echo "<br>";

  $bucle3 = new Bucle(10, 0, 1);
  $bucle3->imprimir();
  echo "<br>";

  $bucle4 = new Bucle(10, 0, -1);
  $bucle4->imprimir();
  echo "<br>";

  $bucle5 = new Bucle(0.2, 0.8, 0.1);
  $bucle5->imprimir();
  echo "<br>";

  $bucle6 = new Bucle('1a', '4b', '1c');
  $bucle6->imprimir();
  echo "<br>";

  ////$bucle = new Bucle();
  ////$bucle->__construct(2, 3, 4);
