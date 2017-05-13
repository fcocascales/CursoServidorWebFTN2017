<?php

  /*
    Conectar con la base de datos SQLite
    que está en el archivo "acme.db".
    Luego obtenemos el contenido de la tabla viajes.
  */

  $pdo = new PDO("sqlite:acme.db");
  $table = $pdo->query("SELECT * FROM viajes");

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Viajes</title>
  <style media="screen">
    strong, span {
      display:inline-block;
      vertical-align:top;
      padding-right:1em;
    }
    strong { width:6em; hyphens:auto; }
    span { width:4em;  text-align:right; }
  </style>
</head>
<body>
  <h1>Viajes</h1>
  <ul>
    <?php
      foreach($table as $row) {
        /*
          $id = $row['id'];
          $destino = $row['destino'];
          $fecha = $row['fecha'];
          $precio = $row['precio'];
        */
        extract($row); // $id, $destino, $fecha, $precio
        echo "<li>";
        echo "<strong>".htmlspecialchars($destino)."</strong>";
        echo "<span>$fecha</span>";
        echo "<span>$precio &euro;</span>";
        echo "</li>";
      }
  ?>
  </ul>
  <p>
    <a href="insertar.php">Agregar un nuevo viaje&hellip;</a>
  </p>
</body>
</html>
