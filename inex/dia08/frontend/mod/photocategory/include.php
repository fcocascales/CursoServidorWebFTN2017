<?php

  require_once "lib/categorias.php";

  $idActual = obtenerIdCategoriaActual();
  $image = "img/categorias/$idActual.jpg";
  $descripcion = obtenerDescripcionCategoria($idActual);

?>
<section id="photocategory">
  <img src="<?php echo $image ?>" width="800" height="200">
  <div><?php echo htmlspecialchars($descripcion) ?></div>
</section>
