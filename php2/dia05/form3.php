<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Calculadora</title>
</head>
<body>
  <h1>Calculadora</h1>
  <form action="output3.php" method="post">
    <p>
      <label>Número<label><br>
      <input type="text" name="numero">
    </p>
    <p>
      <label>Operación<label><br>
      <select name="operacion">
        <option></option>
        <option>doblar</option>
        <option>cuadrado</option>
        <option>cubo</option>
        <option>raíz</option>
      </select>
    </p>
    <p>
      <button>Enviar</button>
    </p>
  </form>
</body>
</html>
