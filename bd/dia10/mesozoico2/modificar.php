<?php

  // TODO: Este array se debería obtener de la tabla dietas en la BD
  $dietas = array(
    array('id'=>100, 'dieta'=>"Herbívoro"),
    array('id'=>200, 'dieta'=>"Carnívoro"),
    array('id'=>300, 'dieta'=>"Omnívoro"),
  );

  // Obtener el parámetro URL id
  $id = isset($_GET['id'])? intval($_GET['id']) : 0;
  if ($id == 0) die("Falta el parámetro URL id");

  $host = "localhost";
  $db   = "bd_mesozoico";
  $user = "root";
  $pass = "";

  $sql = "SELECT nombre, dieta_id, longitud
          FROM dinosaurios WHERE id = $id ";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET UTF8");

    $table = $pdo->query($sql);
    $row = $table->fetch(); ////$row = $table[0];
    $nombre   = $row['nombre'];
    $dieta_id = $row['dieta_id'];
    $longitud = $row['longitud'];
  }
  catch (Exception $ex) {
    die("ERROR: No hay conexión");
  }

?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Modificar dino</title>
</head>
<body>
  <h1>Modificar un dinosaurio</h1>
  <form method="post" action="modificar_bd.php">
    <input
      type="hidden"
      name="id"
      value="<?php echo $id ?>">
    <p>
      <label for="nombre">Nombre:</label>
      <input
        type="text"
        name="nombre"
        value="<?php echo $nombre ?>"
        id="nombre"
        maxlength="50"
        required>
    </p>
    <p>
      <label for="dieta_id">Dieta:</label>
      <select name="dieta_id" id="dieta_id">
        <option></option>
        <?php
          foreach($dietas as $row) {
            $id = $row['id'];
            $dieta = $row['dieta'];
            $selected = ($id == $dieta_id)? 'selected': '';
            echo "<option value=\"$id\" $selected>$dieta</option>\n";
          }
        ?>
      </select>
    </p>
    <p>
      <label for="longitud">Longitud:</label>
      <input
        type="text"
        name="longitud"
        value="<?php echo $longitud ?>"
        id="longitud"> centímetros
    </p>
    <p>
      <button>Modificar</button>
    </p>
  </form>
  <p>
    <a href="listado.php">Volver al listado de dinosaurios</a>
  </p>
</body>
</html>
