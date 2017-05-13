<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio 16</title>
</head>
<body>
  <h1>Ejercicio 16</h1>
  <h2>Tests</h2>
  <ul>
    <li><a href="rest1.php/ambito">ambito</a></li>
    <li><a href="rest1.php/ambito/recurso1">ambito/recurso1</a></li>
    <li><a href="rest1.php/ambito/recurso1/100">ambito/recurso1/100</a></li>
    <li><a href="rest1.php/ambito/recurso1?abc=123">ambito/recurso1?abc=123</a></li>
    <li><a href="rest1.php/ambito/recurso1?abc=123&xyz=456">ambito/recurso1?abc=123&xyz=456</a></li>
  </ul>
  <form action="rest1.php/paises/3?abc=123&xyz=456" method="post">
    <input type="hidden" name="pais" value="bolivia">
    <button>post pais</button>
  </form>

</body>
</html>
