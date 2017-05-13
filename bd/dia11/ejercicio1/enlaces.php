<?php
  require_once "basedatos.php";

  try {
    $pdo = conectar_bd();
    $dietas = obtener_dietas($pdo);
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
  <h1>Filtro</h1>
  <form action="resultado.php" method="get">
    <p>
      <label for="dieta_id">Dieta:</label>
      <select name="dieta_id" id="dieta_id">
        <option></option>
        <?php
          foreach ($dietas as $row) {
            $id = $row['id'];
            $dieta = $row['dieta'];
            echo "<option value=\"$id\">$dieta</option>";
          }
        ?>
      </select>
    </p>
    <p>
      <button>Enviar</button>
    </p>
  </form>
</body>
</html>
