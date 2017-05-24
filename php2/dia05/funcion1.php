<h2>Funciones que convierte a número</h2>
<h2>Función intval()</h2>
<p>Convierte mientras pueda a un número entero</p>
<p>Sanear la entrada del usuario para que sea
  un número entero</p>
<p>Se usa mucho para validar parámetros URL
  <strong>id</strong> que suelen hacer referencia
  a registros de tablas de BD</p>  
<?php

  echo intval(123); // 123
  echo "<br>";
  echo intval("456"); // 456
  echo "<br>";
  echo intval(78.9); // 78
  echo "<br>";
  echo intval("567abc"); // 567
  echo "<br>";
  echo intval("xyz346"); // 0
  echo "<br>";
  echo intval("hola"); // 0

?>
<h2>Función floatval</h2>
<p>Convierte un número de coma flotante,
  que tiene decimales</p>
<?php
  echo floatval(78.9); // 78.9
  echo "<br>";
  echo floatval("12.34xyz"); // 12.34
