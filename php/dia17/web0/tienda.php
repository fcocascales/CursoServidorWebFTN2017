<?php

  require_once "BaseDatos.php";

  function imprimirContactos() {
    global $agenda;
    echo "<option></option>";
    foreach($agenda as $contacto) {
      $nombre = $contacto['nombre'];
      echo "<option>$nombre</option>";
    }
  }

  function imprimirProductos() {
    global $almacen;
    echo "<option></option>";
    foreach($almacen as $producto) {
      $nombre = $producto['nombre'];
      echo "<option>$nombre</option>";
    }
  }

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tienda</title>
</head>
<body>
<h1>Tienda</h1>

<form action="comprar.php" method="post">
  <p>
    <label for="contacto">Contacto:</label>
    <select id="contacto" name="contacto">
      <?php imprimirContactos(); ?>
    </select>
  </p>
  <p>
    <label for="producto">Producto:</label>
    <select id="producto" name="producto">
      <?php imprimirProductos(); ?>
    </select>
  </p>
  <p>
    <label for="cantidad">Cantidad (kgrs):</label>
    <input type="text" id="cantidad" name="cantidad">
  </p>
  <button>Comprar</button>
</form>

</body>
</html>
