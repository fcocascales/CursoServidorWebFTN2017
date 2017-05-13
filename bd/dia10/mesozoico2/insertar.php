<?php


?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Insertar dino</title>
</head>
<body>
  <h1>Añadir un nuevo dinosaurio</h1>
  <form method="post" action="insertar_bd.php">
    <p>
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre" maxlength="50" required>
    </p>
    <p>
      <label for="dieta_id">Dieta:</label>
      <select name="dieta_id" id="dieta_id">
        <option></option>
        <option value="100">Herbívoro</option>
        <option value="200">Carnívoro</option>
        <option value="300">Omnívoro</option>
      </select>
    </p>
    <p>
      <label for="longitud">Longitud:</label>
      <input type="text" name="longitud" id="longitud"> centímetros
    </p>
    <p>
      <button>Añadir</button>
    </p>
  </form>
  <p>
    <a href="listado.php">Volver al listado de dinosaurios</a>
  </p>
</body>
</html>
