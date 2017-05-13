<?php
  $a = 5;
  $b = 13;

  $suma = $a + $b;
  $resta = $a - $b;
  $mult = $a * $b;
  $div = $a / $b;

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ejercicio 4</title>
</head>
<body>
<h1>Ejercicio 4</h1>
<?php
  echo "<p>La suma de $a y $b es $suma</p>".
       "<p>La resta de $a y $b es $resta</p>".
       "<p>La multiplicación de $a y $b es $mult</p>".
       "<p>La división de $a y $b es $div</p>";
?>
</body>
</html>
