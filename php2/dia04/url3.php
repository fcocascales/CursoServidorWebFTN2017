<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>URL3</title>
</head>
<body>
  <h1>URL3</h1>
  <form action="url3.php" method="get">
    <label>Ciudad:</label>
    <input type="text" name="ciudad">
    <button>Enviar</button>
  </form>
  <p><?php
    if (isset($_GET['ciudad'])) {
      //echo $_GET['ciudad']; // Superpeligroso
      $ciudad = strip_tags($_GET['ciudad']); // Quita etiquetas HTML
      $ciudad = trim($ciudad); // Elimina espacios en blanco sobrantes
      if (empty($ciudad)) echo "Ciudad vacía";
      echo $ciudad;
    }
    else {
      echo "No hay ciudad";
    }
  ?></p>
</body>
</html>
