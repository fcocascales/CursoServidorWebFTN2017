<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Salida</title>
</head>
<body>
  <?php
    // 1) Inicializar todas las variables
    $frase = "";
    $veces = 0;

    // 2) Leer los parámetros GET
    if (isset($_GET['frase'])) {
      $frase = strip_tags($_GET['frase']);
    }
    else {
      echo "Falta la frase<br>";
    }
    if (isset($_GET['veces'])) {
      $veces = intval($_GET['veces']);
    }
    else {
      echo "Falta el número de veces<br>";
    }

    // 3) Imprimir la frase N veces
    if (isset($frase) && isset($veces)) {
      echo "<ol>";
      for ($i=0;  $i<$veces; $i++) {
        echo "<li>$frase</li>";
      }
      echo "</ol>";
    }

  ?>
</body>
</html>
