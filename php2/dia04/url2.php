<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>URL2</title>
</head>
<body>
  <h1>URL2</h1>
  <ul>
    <li><a href="url2.php">Sin id</a></li>
    <li><a href="url2.php?id=3">id=3</a></li>
    <li><a href="url2.php?id=10">id=10</a></li>
    <li><a href="url2.php?id=999">id=999</a></li>
  </ul>
  <?php
    // $_GET['id'], isset() o empty()
    //print_r($_GET);

    if (isset($_GET['id'])) // ¿Existe el parámetro id en la URL?
    {
      $id = $_GET['id']; // Obtener el valor del parámetro id
      $id = intval($id); // Convierte el valor en número entero
      echo $id; // Imprimir una variable 
    }
    else // No hay parámetro id en la URL
    {
      echo "No hay id en la URL";
    }

  ?>
</body>
</html>
