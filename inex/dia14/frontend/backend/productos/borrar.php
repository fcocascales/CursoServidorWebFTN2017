<?php
  //=============================================
  // ENCABEZADO

  $title = "¿Borrar producto?";
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

  if (empty($_POST)) {
    $sql = "SELECT producto FROM productos WHERE id = ?";
    $producto = Conexion::queryValue($sql, $id);
    ?>
    <section class="form">
    <h1><?php echo $title ?></h1>
    <form action="borrar.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <p><?php echo $producto ?></p>
      <p>
        <button><i class="fa fa-times"></i> Borrar</button>
      </p>
    </form>
    </section>
    <?php
  }
  else { // Hay POST
    try {
      $sql = "DELETE FROM productos WHERE id=?";
      Conexion::deleteRow($sql, $id);

      $ruta = rutaFotoSubida($id);
      if (file_exists($ruta)) unlink($ruta); // Borrar el archivo de la foto

      echo "<p class=\"info\">Se ha borrado el producto</p>";
    }
    catch (Exception $ex) {
      echo "<p class=\"error\">". $ex->getMessage()."</p>";
    }
  }

  //=============================================
  // PIE

  include "../template/foot.php";
