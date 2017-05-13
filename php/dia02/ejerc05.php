<?php
  /*
    Imprime la tabla de multiplicar:

      2 x 1 = 2
      2 x 2 = 4
      2 x 3 = 6
      ...
      2 x 10 = 20

    Usa el bucle for y todas las variables necesarias
  */

  $tabla = 2;

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ejercicio 5</title>
</head>
<body>
<h1>Ejercicio 5</h1>
<p>Tabla de multiplicar</p>
<?php
  for ($i=1; $i<=10; $i++) {
    $resultado = $i * $tabla;
    echo "$i &times; $tabla = $resultado<br>";   
  }
?>
</body>
</html>
