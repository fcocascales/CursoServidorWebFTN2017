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

  // Valores predeterminados
  $row = array('activado'=> true);
?>
<section class="form">
<h1><?php echo $title ?></h1>
<form action="insertando.php" method="post" enctype="multipart/form-data">
  <?php include "campos.php" ?>
  <p>
    <button><i class="fa fa-plus-circle"></i> Insertar</button>
  </p>
</form>
</section>

<?php

  //=============================================
  // PIE

  include "../template/foot.php";
