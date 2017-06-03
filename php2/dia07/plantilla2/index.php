<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sitio dos</title>
</head>
<body>
  <h1>Sitio dos</h1>
  <p>
    <a href="?id=1">Primero</a> |
    <a href="?id=2">Segundo</a> |
    <a href="?id=3">Tercero</a>
  </p>
  <hr>
  <?php
    $id = 1;
    if (isset($_GET['id'])) { $id = intval($_GET['id']); }
    include "contenido$id.php";
  ?>
  <hr>
  <p>Curso de servidores web</p>
</body>
</html>
