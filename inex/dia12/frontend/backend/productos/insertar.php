<?php
  //=============================================
  // ENCABEZADO

  $title = "Insertar producto";
  $extra = "";
  $include = "";
  $search = false;
  include "../template/head.php";

  //=============================================
  // CUERPO

  require_once "../../lib/form.php";
  require_once "../../lib/conexion.php";

  $proveedores = Conexion::queryAssoc("SELECT id, empresa FROM proveedores ORDER BY 2");
  $categorias = Conexion::queryAssoc("SELECT id, categoria FROM categorias ORDER BY 2");

?>
<section class="form">
<h1><?php echo $title ?></h1>
<form action="insertando.php" method="post" enctype="multipart/form-data">
  <p>
    <label for="producto">Producto:</label>
    <input type="text" id="producto" name="producto">
  </p>
  <p>
    <label for="precio">Precio:</label>
    <input type="text" id="precio" name="precio">
  </p>
  <p>
    <label for="cantidad">Cantidad:</label>
    <input type="text" id="cantidad" name="cantidad">
  </p>
  <p>
    <label for="proveedor_id">Proveedor:</label>
    <select id="proveedor_id" name="proveedor_id">
      <option value="0"></option>
      <?php imprimirFormOpciones($proveedores, 0); ?>
    </select>
  </p>
  <p>
    <label for="categoria_id">Categorías:</label>
    <select id="categoria_id" name="categoria_id">
      <option value="0"></option>
      <?php imprimirFormOpciones($categorias, 0); ?>
    </select>
  </p>
  <p>
    <label for="descripcion">Descripción:</label>
    <textarea id="categoria_id" name="categoria_id"></textarea>
  </p>
  <p>
    <label for="destacado">Destacado:</label>
    <input type="checkbox" id="destacado" name="destacado">
  </p>
  <p>
    <label for="activado">Activado:</label>
    <input type="checkbox" id="activado" name="activado" checked>
  </p>
  <p>
    <label for="foto">Foto:</label>
    <input type="file" id="foto" name="foto">
  </p>
  <p>
    <button>Insertar</button>
  </p>
</form>
</section>

<?php

  //=============================================
  // PIE

  include "../template/foot.php";
