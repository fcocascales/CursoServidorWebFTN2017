<?php
  /*
    Direcciones posibles:

    /php2/dia07/plantilla3              --> index.php
    /php2/dia07/plantilla3/index.php    --> index.php
    /php2/dia07/plantilla3/index.php/1  --> index.php  /1
    /php2/dia07/plantilla3/index.php/2  --> index.php  /2
    /php2/dia07/plantilla3/index.php/3  --> index.php  /3

    $_SERVER['SCRIPT_NAME'] siempre da la misma dirección
       "/php2/dia07/plantilla3/index.php"

    $_SERVER['PATH_INFO']
      no definido
      "/1"
      "/2"
      "/3"
  */
  $script = $_SERVER['SCRIPT_NAME'];
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sitio tres</title>
</head>
<body>
  <h1>Sitio tres</h1>
  <p>
    <a href="<?php echo "$script/1" ?>">Primero</a> |
    <a href="<?php echo "$script/2" ?>">Segundo</a> |
    <a href="<?php echo "$script/3" ?>">Tercero</a>
  </p>
  <hr>
  <?php
    $info = '/1';
    if (isset($_SERVER['PATH_INFO'])) { $info = $_SERVER['PATH_INFO']; }
    $items = explode('/', $info);
    $id = intval($items[1]);
    include "contenido$id.php";
  ?>
  <hr>
  <p>Curso de servidores web</p>
</body>
</html>
