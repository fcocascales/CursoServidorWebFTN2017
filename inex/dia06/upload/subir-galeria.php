<?php

  if (isset($_FILES['foto'])) {
    if ($_FILES['foto']['error'] == 0) {
      if ($_FILES['foto']['type'] == "image/jpeg") {
        $nombre = $_FILES['foto']['name'];
        $temporal = $_FILES['foto']['tmp_name'];
        move_uploaded_file($temporal, "imgs/$nombre");
      }
    }
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Galería</title>
  <style media="screen">
    #fotos {
      display:flex;
      flex-wrap:wrap;
      /*justify-content: center;*/
    }
    #fotos img {
      /*border:4px solid #000;
      margin:4px;
      border-radius:100px;
      box-sizing:border-box;*/
    }
  </style>
</head>
<body>
  <h1>Galería de fotografías</h1>

  <section id="fotos">
    <?php
      foreach(scandir("imgs") as $foto) {
        if ($foto[0] == '.') continue; // Evitar "." y ".."
        echo "<img src=\"imgs/$foto\" width=\"300\">";
      }
    ?>
  </section>

  <h2>Subir foto</h2>
  <form method="post" enctype="multipart/form-data">
    <input type="file" name="foto"><br>
    <button>Subir</button>
  </form>

</body>
</html>
