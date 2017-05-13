<?php



?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Insertar</title>
  <style media="screen">
    label { display:block; }
  </style>
</head>
<body>
  <h1>Insertar un nuevo viaje</h1>
  <form action="insertar_bd.php" method="post">
    <p>
      <label for="destino">Destino</label>
      <input type="text" name="destino" id="destino">
    </p>
    <p>
      <label for="fecha">Fecha</label>
      <input type="text" name="fecha" id="fecha" placeholder="AAAA-MM-DD">
    </p>
    <p>
      <label for="precio">Precio</label>
      <input type="text" name="precio" id="precio">
    </p>
    <p>
      <button>Insertar</button>
    </p>
  </form>
</body>
</html>
