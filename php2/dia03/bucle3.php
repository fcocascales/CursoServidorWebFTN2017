<?php
/*
  Bucle 1: for

  Bucle contador.
  Es un bucle while compacto.
  En la misma línea se escribe la
  inicialización del bucle, la condición
  de continuación y el incremento de la
  variable.

  Este bucle se usa mucho.
*/
echo "<h2>Imprimir del 1 al 10</h2>";
for ($i=1; $i<=10; $i++) {
  echo "$i, ";
}
/*for (
  $i = 1;
  $i <= 10;
  $i++
){
  echo "$i, ";
}*/

echo "<h2>Imprimir del 10 al 1</h2>";
for($i=10; $i>=1; $i--) {
  echo "$i, ";
}

echo "<h2>Imprimir los números pares del 0 al 20</h2>";
for($i=0; $i<=20; $i+=2) {
  echo "$i, ";
}


 ?>
