<?php
  /*
    Variables GET

    Mostrar mensajes de error cuando
    no existe la variable o tiene un valor incorrecto

    Los valores correctos son del 1 al 100

    En el navegador web:
      http://localhost/dia02/ejerc07.php
      http://localhost/dia02/ejerc07.php?num=10
      http://localhost/dia02/ejerc07.php?num=300
      http://localhost/dia02/ejerc07.php?num=25
 */

 if (isset($_GET['num'])) { // ¿Existe la variable GET num ?

   $n = intval($_GET['num']); // Me aseguro que sea un número entero

   if ($n >= 1 && $n <= 100) { // Correcto
     $mensaje = "El número $n es correcto";
   }
   else { // Incorrecto
     $mensaje = "El número es incorrecto";
   }

 }
 else { // No existe la variable GET num
   $mensaje = "Falta el parámetro GET num";
 }

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ejercicio 7</title>
</head>
<body>
<h1>Ejercicio 7</h1>
<p>Variables GET</p>
<?php
  echo $mensaje;
?>
<ul>
  <li><a href="ejerc07.php">Sin número</a></li>
  <li><a href="ejerc07.php?num=10">Diez</a></li>
  <li><a href="ejerc07.php?num=37">Treinta y siete</a></li>
  <li><a href="ejerc07.php?num=200">Doscientos</a></li>  
</ul>
</body>
</html>
