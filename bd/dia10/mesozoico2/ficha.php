<?php
  // Si hay el parámetro id en la URL entonces
  //  tomamos dicho parámetro convirtiéndolo en entero
  // y sino lo inicializamos a 0. No hay ningún id=0 en la BD.
  $id = isset($_GET['id'])? intval($_GET['id']) : 0;
  if ($id == 0) die("Falta el parámetro URL id");

  $host = "localhost";
  $db   = "bd_mesozoico";
  $user = "root";
  $pass = "";

  // Advertencia: No es una buena idea poner directamente
  //  en el SQL las variables PHP. En este caso no habrá
  //  peligro porque seguro que $id es un número entero
  //  ya que hemos usado la función intval.
  //
  $sql = "SELECT d.nombre, a.dieta, d.longitud
FROM dinosaurios d INNER JOIN dietas a ON d.dieta_id = a.id
WHERE d.id = $id ";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET CHARACTER SET UTF8");

    // La variable $table no es realmente un array indexado.
    // La variable $table es un objeto de la clase PDOStatement.
    //   En la ayuda del método query de la clase PDO lo explica.
    // El método fetch de la clase PDOStatement nos da la
    //   siguiente fila. Cada fetch que hagas avanza una fila.
    // El acceso a las filas de una tabla es secuencial
    //   Empezando por la primera y de uno en uno.
    //
    $table = $pdo->query($sql);
    $row = $table->fetch(); ////$row = $table[0];
    $nombre   = $row['nombre'];
    $dieta    = $row['dieta'];
    $longitud = $row['longitud'];
  }
  catch (Exception $ex) {
    die("ERROR: No hay conexión");
  }
 ?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ficha del dinosaurio</title>
  <style media="screen">
    th { text-align:right; }
  </style>
</head>
<body>
  <h1>Ficha del dinosaurio</h1>
  <table>
    <tr>
      <th>Id:</th>
      <td><?php echo $id ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo htmlspecialchars($nombre) ?></td>
    </tr>
    <tr>
      <th>Dieta:</th>
      <td><?php echo htmlspecialchars($dieta) ?></td>
    </tr>
    <tr>
      <th>Largo:</th>
      <td><?php echo $longitud/100 ?> metros</td>
    </tr>
  </table>
  <p>
    <a href="listado.php">Volver al listado de dinosaurios</a>
  </p>
</body>
</html>
