<?php
  //=============================================
  // ENCABEZADO

  $title = "Modificar producto";
  $extra = "";
  $include = "";
  $search = false;
  include "../template/head.php";

  //=============================================
  // CUERPO

  require_once "../../lib/form.php";
  require_once "../../lib/conexion.php";
  require_once "funciones.php";

  // Inicializar variables
  $id = isset($_GET['id'])? intval($_GET['id']) : intval($_POST['id']);
  $proveedores = Conexion::queryAssoc("SELECT id, empresa FROM proveedores ORDER BY 2");
  $categorias = Conexion::queryAssoc("SELECT id, categoria FROM categorias ORDER BY 2");

  if (!empty($_POST)) {
    try {
      include "input.php"; // Obtener las variables del $_POST

      $sql = "UPDATE productos SET producto=?, precio_unidad=?,
        cantidad_por_unidad=?, proveedor_id=?, categoria_id=?,
        descripcion=?, destacado=?, activado=? WHERE id=?";

      Conexion::updateRow($sql, $producto, $precio,
        $cantidad, $proveedorId, $categoriaId, $descripcion,
        $destacado, $activado, $id);

      subirFoto($id);

      echo "<p class=\"info\">Se han guardado los cambios</p>";
    }
    catch (Exception $ex) {
      echo "<p class=\"error\">". $ex->getMessage()."</p>";
    }
  }

  // Obtener los datos del producto
  $sql = "SELECT producto, precio_unidad,
    cantidad_por_unidad, proveedor_id, categoria_id,
    descripcion, destacado, activado
    FROM productos WHERE id = ?";
  $row = Conexion::queryRow($sql, $id);

  // Mostrar la foto
  $foto = rutaFoto($id);
  echo "<img class=\"flota\" src=\"$foto\" width=\"320\" height=\"240\">";
?>
<section class="form">
<h1><?php echo $title ?></h1>
<form action="modificar.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id ?>">
  <?php include "campos.php" ?>
  <p>
    <button><i class="fa fa-pencil-square-o"></i> Modificar</button>
  </p>
</form>
</section>

<?php

  //=============================================
  // PIE

  include "../template/foot.php";
