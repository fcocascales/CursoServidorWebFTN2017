<?php
  require_once "BaseDatos.php";

  $dieta_id = isset($_GET['dieta_id'])? intval($_GET['dieta_id']) : 0;

  try {
    $bd = new BaseDatos();
    $dinos = $bd->getDinosaurios($dieta_id);
    $dieta = $bd->getNombreDieta($dieta_id);
  }
  catch (Exception $ex) {
    die($ex->getMessage());
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dinosaurios</title>
</head>
<body>
  <h1>Dinosaurios</h1>
  <h2>Dieta <?php echo $dieta ?></h2>
  <ul>
    <?php
      foreach($dinos as $row) {
        $nombre = htmlspecialchars(strtolower($row['nombre']));
        $longitud = $row['longitud'];
        echo "<li>El <strong>$nombre</strong>";
        if ($longitud) echo " mide $longitud cm";
        echo "</li>";
      }
    ?>
  </ul>
</body>
</html>
