<?php

  require_once "lib/categorias.php";

  $idActual = obtenerIdCategoriaActual();
  $imagen = "img/categorias/$idActual.jpg";
  $descripcion = obtenerDescripcionCategoria($idActual);

?>

<section id="photocategory">
  <img src="<?php echo $imagen ?>" width="800" height="200">
  <div><?php echo htmlspecialchars($descripcion) ?></div>
</section>
