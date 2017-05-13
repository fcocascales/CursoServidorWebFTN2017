<?php
  // Intercambiar el valor de 2 variables

  function enunciadoEjercicio() {
    $num1 = 10;
    $num2 = 25;

    // TODO Aquí va el ejercicio

    echo "$num1<br>"; // 25
    echo "$num2<br>"; // 10
  }

  //---------------------------------------------

  function solucionIdeal() {
    $num1 = 10;
    $num2 = 25;

    $aux = $num1;
    $num1 = $num2;
    $num2 = $aux;

    echo "$num1<br>"; // 25
    echo "$num2<br>"; // 10
  }

  //---------------------------------------------

  function solucionTrilero() {
    $num1 = 10;
    $num2 = 25;

    $num1 = $num1 + $num2; // 35
    $num2 = $num1 - $num2; // 10
    $num1 = $num1 - $num2; // 25

    echo "$num1<br>"; // 25
    echo "$num2<br>"; // 10
  }

  //---------------------------------------------

  function solucionFuncion() {
    $num1 = 10;
    $num2 = 25;

    intercambiar($num1, $num2);

    echo "$num1<br>"; // 25
    echo "$num2<br>"; // 10
  }
  // Normalmente el paso de parámetro es por valor.
  // Para el paso de parámetros por referencia se usa el & (ampersand)
  // No se pasa el valor sino la dirección de la variable
  // En el paso de parámetro por referencia el parámetro es de entrada y salida.
  // Las variables de objetos no nesitan el & porque siempre se pasan por referencia
  // ya que las variables de objeto contienen la dirección en memoria del objeto.
  function intercambiar(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
  }

  //---------------------------------------------

  function solucionReturn() {
    $num1 = 10;
    $num2 = 25;

    /*$array = array($num1, $num2);
    $num1 = $array[0];
    $num2 = $array[1];*/
    //list($num1, $num2) = array($num2, $num1);
    list($num1, $num2) = intercambiarReturn($num1, $num2);

    echo "$num1<br>"; // 25
    echo "$num2<br>"; // 10
  }

  function intercambiarReturn($a, $b) {
    return array($b, $a); 
  }

  //---------------------------------------------

  echo "<h1>Intercambiar 2 variables</h1>";
  echo "<h2>Enunciado</h2>";
  enunciadoEjercicio();
  echo "<h2>Solución ideal con variable auxiliar</h2>";
  solucionIdeal();
  echo "<h2>Solución con sumas y restas</h2>";
  solucionTrilero();
  echo "<h2>Solución con una función y paso de parámetros por referencia</h2>";
  solucionFuncion();
  echo "<h2>Solución con una función que retorna 2 valores</h2>";
  solucionReturn();

 ?>
