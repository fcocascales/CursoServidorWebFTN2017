<?php
  $operando1 = isset($_POST['operando1'])? $_POST['operando1'] : 0;
  $operando2 = isset($_POST['operando2'])? $_POST['operando2'] : 0;
  $orden     = isset($_POST['orden'])?     $_POST['orden']     : '';
  $resultado = 0;

  $operando1 = floatval($operando1); // Convierte a número decimal
  $operando2 = floatval($operando2);

  switch ($orden) {
    case 'suma':     $resultado = $operando1 + $operando2; break;
    case 'resta':    $resultado = $operando1 - $operando2; break;
    case 'producto': $resultado = $operando1 * $operando2; break;
    case 'division': $resultado = $operando1 / $operando2; break;
    default:         $resultado = 0;
  }

 ?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cálculo</title>
  </head>
  <body>
    <h1>Cálculo</h1>
    <form action="" method="post">
      <p>
        <label for="operando1">Operando 1</label>
        <input type="text" value="<?php echo $operando1 ?>"
          id="operando1" name="operando1" >
      </p>
      <p>
        <label for="operando2">Operando 2</label>
        <input type="text" value="<?php echo $operando2 ?>"
          id="operando2" name="operando2" >
      </p>
      <p>
        <button type="submit" name="orden" value="suma">Sumar</button>
        <button type="submit" name="orden" value="resta">Restar</button>
        <button type="submit" name="orden" value="producto">Multiplicar</button>
        <button type="submit" name="orden" value="division">Dividir</button>
      </p>
      <p>
        <label for="resultado">Resultado</label>
        <input type="text" value="<?php echo $resultado ?>"
          id="resultado" name="resultado" readonly>
      </p>
    </form>
  </body>
</html>
