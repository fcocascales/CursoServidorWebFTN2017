<?php
  require_once "basedatos.php";

  $dieta_id = isset($_GET['dieta_id'])? intval($_GET['dieta_id']) : 0;

  try {
    $pdo = conectar_bd();
    $dinos = obtener_dinosaurios($pdo, $dieta_id);
    $dieta = obtener_nombre_dieta($pdo, $dieta_id);
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
  <h1>Dinosaurios (dieta <?php echo $dieta ?>)</h1>
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
