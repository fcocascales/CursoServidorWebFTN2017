<?php
  /*
    Introducir una variable de usuario en el PHP
    Variables GET

    En el navegador web:
      http://localhost/dia02/ejerc06.php?num=10
      http://localhost/dia02/ejerc06.php?num=300
      http://localhost/dia02/ejerc06.php?num=25

    Pensamientos del hacker:
      http://localhost/dia02/ejerc06.php?num=<strong style="color:red">Hola</strong>
      http://localhost/dia02/ejerc06.php?num=<script>alert("hola");</script>
 */

  //$n = $_GET['num']; // Es muy peligroso!!!

  $n = intval($_GET['num']); 

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ejercicio 6</title>
</head>
<body>
<h1>Ejercicio 6</h1>
<p>Variables GET</p>
<?php
  echo $n;
?>
</body>
</html>
