<?php
  require_once "MiBaseDatos.php";

  try {
    $bd = new MiBaseDatos();
    $dietas = $bd->getDietas();
  }
  catch (Exception $ex) {
     die($ex->getMessage());
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Filtro</title>
</head>
<body>
  <h1>Filtro con enlaces</h1>
  <h2>Dietas</h2>
  <ul>
    <?php
      foreach ($dietas as $row) {
        $id = $row['id'];
        $dieta = $row['dieta'];
        echo "<li><a href=\"resultado.php?dieta_id=$id\">$dieta</a></li>";
      }
    ?>
  </ul>
</body>
</html>
