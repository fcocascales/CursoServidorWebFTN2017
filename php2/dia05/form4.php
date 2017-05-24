<?php
  /*
    EJERCICIO:

    Leer los parámetros URL: operando1, operando2 y comando
    para calcular el valor de la variable $resultado
  */

  // 1) Inicialización de las variables
  $operando1 = $operando2 = $resultado = 0;
  $comando = "";

  // 2) Obtener los parámetros GET
  if (isset($_GET['operando1'])) $operando1 = floatval($_GET['operando1']);
  if (isset($_GET['operando2'])) $operando2 = floatval($_GET['operando2']);
  if (isset($_GET['comando'])) $comando = strip_tags($_GET['comando']);

  // 3) Cálcular el resultado
  switch ($comando) {
    case '+': $resultado = $operando1 + $operando2; break;
    case '-': $resultado = $operando1 - $operando2; break;
    case '*': $resultado = $operando1 * $operando2; break;
    case '/':
      if ($operando2 == 0) $resultado = "División entre 0";
      else $resultado = $operando1 / $operando2;
      break;
  }

 ?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Calculadora</title>
</head>
<body>
  <h1>Calculadora</h1>
  <form action="form4.php" method="get">
    <p>
      <label>Primer operando:<label><br>
      <input type="text" name="operando1"
                         value="<?php echo $operando1 ?>">
    </p>
    <p>
      <label>Segundo operando:<label><br>
      <input type="text" name="operando2"
                         value="<?php echo $operando2 ?>">
    </p>
    <p>
      <button name="comando" value="+">Sumar</button>
      <button name="comando" value="-">Restar</button>
      <button name="comando" value="*">Multiplicar</button>
      <button name="comando" value="/">Dividir</button>
    </p>
    <p>
      <label>Resultado:<label><br>
      <input type="text" readonly value="<?php echo $resultado ?>">
    </p>
  </form>
</body>
</html>
