<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Enlaces</title>
</head>
<body>
  <h1>Enlaces o vínculos o hipertexto</h1>
  <p>Se pueden pasar parámetros a las páginas vinculadas</p>
  <p>Son parámetros URL, también llamados parámetros GET, o
     query string</p>
  <h2>Etiqueta A HREF</h2>
  <p>
    <a href="funcion4.php">Ir al ejercicio anterior</a>
    <br>
    <a href="http://www.wikipedia.org">Enciclopedia libre</a>
    <br>
    <a href="../dia04/url3.php">Un ejercicio del día anterior</a>
    <br>
    <a href="/index.php">El índice de la raíz</a>
    <br>
    <a href="url5.php?num=10">Pasar num=10 a url5.php</a>
    <br>
    <a href="url5.php?num=100">Pasar num=100 a url5.php</a>
    <br>
    <a href="url5.php?num=100&total=20">Pasar num=100 y total=20 a url5.php</a>
  </p>
  <h2>Etiqueta FORM</h2>
  <form action="url5.php" method="get">
    num: <input type="text" name="num">
    total: <input type="text" name="total">
    <button>Enviar</button>
  </form>
</body>
</html>
