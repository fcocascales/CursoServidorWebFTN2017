<?php
  //=============================================
  // ENCABEZADO

  $title = "Modificar categoría";
  $extra = "";
  $include = "";
  $search = false;
  include "../template/head.php";

  //=============================================
  // CUERPO

  require_once "../../lib/conexion.php";
  require_once "funciones.php";

  // Inicializar variables
  $id = isset($_GET['id'])? intval($_GET['id']) : intval($_POST['id']);

  if (!empty($_POST)) {
    try {
      include "input.php"; // Obtener las variables del $_POST

      $sql = "UPDATE categorias SET categoria=?, descripcion=?,
         activado=? WHERE id=?";

      Conexion::updateRow($sql, $categoria, $descripcion, $activado, $id);

      subirFoto($id);

      echo "<p class=\"info\">Se han guardado los cambios</p>";
    }
    catch (Exception $ex) {
      echo "<p class=\"error\">". $ex->getMessage()."</p>";
    }
  }

  // Obtener los datos
  $sql = "SELECT categoria, descripcion, activado
    FROM categorias WHERE id = ?";
  $row = Conexion::queryRow($sql, $id);

  // Mostrar la foto
  $foto = rutaFoto($id);
?>
<div class="form_container">
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
  <aside>
    <img src="<?php echo $foto ?>" width="400" height="100">
  </aside>
</div>

<?php

  //=============================================
  // PIE

  include "../template/foot.php";
