<?php
  //=============================================
  // ENCABEZADO

  $title = "Insertar categoría";
  $extra = "";
  $include = "";
  $search = false;
  include "../template/head.php";

  //=============================================
  // CUERPO

  require_once "../../lib/conexion.php";

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
