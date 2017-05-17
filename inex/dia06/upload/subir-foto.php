<?php
  $mensaje = "";
  if (isset($_FILES['foto'])) { // Se subió la foto?
    if ($_FILES['foto']['error'] == 0) { // No hay errores?
      if ($_FILES['foto']['type'] == 'image/jpeg') { // JPG?
        move_uploaded_file($_FILES['foto']['tmp_name'], 'foto.jpg');
      }
      else $mensaje = "No es un JPG";
    }
    else $mensaje = "Hay un error al subir";
  }
?><!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Foto</title>
</head>
<body>
 <h1>Foto</h1>
 <?php if (!empty($mensaje)) echo "<p>$mensaje</p>"; ?>
 <p><img src="foto.jpg" width="400"></p>
 <h2>Cambiar la foto</h2>
 <form method="post" enctype="multipart/form-data">
   <input type="file" name="foto"><br>
   <button>Subir</button>
 </form>
</body>
</html>
