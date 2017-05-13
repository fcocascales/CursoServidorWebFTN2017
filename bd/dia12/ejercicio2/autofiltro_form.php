<?php
  require_once "BaseDatos.php";

  $dieta_id = isset($_GET['dieta_id'])? intval($_GET['dieta_id']) : 0;

  try {
    $bd = new BaseDatos();
    $dietas = $bd->getDietas();
    $dinos = $bd->getDinosaurios($dieta_id);
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

  <form action="" method="get">
    <p>
      <label for="dieta_id">Dieta:</label>
      <select name="dieta_id" id="dieta_id">
        <option></option>
        <?php
          foreach ($dietas as $row) {
            $id = $row['id'];
            $dieta = $row['dieta'];
            $selected = ($id == $dieta_id)? " selected": "";
            echo "<option value=\"$id\"$selected>$dieta</option>";
          }
        ?>
      </select>
      <button>Enviar</button>
    </p>
  </form>

  <?php if ($dieta_id > 0): ?>
    <h2><?php echo $dinos->rowCount() ?> dinosaurios</h2>
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
  <?php endif; ?>

</body>
</html>
