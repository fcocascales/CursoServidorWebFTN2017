<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio 2</title>
  <link href="estilos.css" rel="stylesheet">
</head>
<body>
  <h1>Ejercicio 2</h1>
  <p>
    <a href="ejercicio2.md">Enunciado</a>
  </p>
  <h2>Solución</h2>
  <ol>
    <li><h3>Lista de proveedores:</h3>
      <a href="solucion1.php">fetch</a><br>
      <a href="solucion1b.php">fetchAll(PDO::FETCH_COLUMN)</a>
    </li>
    <li><h3>Tabla de empleados</h3>
      <a href="solucion2.php">fetchAll(PDO::FETCH_ASSOC)</a>
    </li>
    <li><h3>Clientes de Alemania</h3>
      <a href="solucion3.php">fetAll(PDO::FETCH_COLUMN)</a>
    </li>
    <li><h3>Categorías y productos:</h3>
      <a href="solucion4.php">fetchAll(PDO::FETCH_ASSOC)</a><br>
      <a href="solucion4b.php">fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC)</a>
    </li>
    <li><h3>Clientes por país</h3>
      <a href="solucion5.php">fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC)</a>
    </li>
    <li><h3>Pedidos por años y meses</h3>
      <a href="solucion6.php">Una sola consulta</a><br>
      <a href="solucion6b.php">Tres consultas paramétricas</a>
    </li>
    <li><h3>Pedido 11000</h3>
      <a href="solucion7.php">fetch</a>
    </li>
    <li><h3>Detalles del pedido 11000</h3>
      <a href="solucion8.php">Una sola consulta</a><br>
      <a href="solucion8.php">Dos consultas</a> separando encabezado y detalle
    </li>
  </ol>
</body>
</html>
