<?php
  require_once "../controlador/Tienda.php";

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tienda</title>
</head>
<body>
<h1>Tienda</h1>

<form action="<?php echo $tienda->getFormAction() ?>" method="post">
  <p>
    <label for="contacto">Contacto:</label>
    <select id="contacto" name="contacto">
      <?php $tienda->imprimirOpcionesContactos() ?>
    </select>
  </p>
  <p>
    <label for="producto">Producto:</label>
    <select id="producto" name="producto">
      <?php $tienda->imprimirOpcionesProductos() ?>
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
