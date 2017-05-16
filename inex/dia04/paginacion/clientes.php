<?php
  require_once "conexion.php";

  $pdo = conexion();
  $porPagina = 10;
  $totalPags = obtenerTotalPags($pdo, $porPagina);
  $pagina = obtenerPagina();
  $tabla = obtenerTabla($pdo, $pagina, $porPagina);

  function obtenerTotalPags($pdo, $porPagina) {
    $sql = "SELECT CEIL(COUNT(*)/$porPagina) FROM clientes";
    $result = $pdo->query($sql);
    $row = $result->fetch(PDO::FETCH_NUM); // Fila con campos indexados
    $totalPags = $row[0]; // Primer campo de la fila
    return $totalPags;
  }

  function obtenerPagina() {
    // Con la función intval mantenemos a raya a los hackers
    $pagina = isset($_GET['pagina'])? intval($_GET['pagina']) : 1;
    return $pagina;
  }

  /*
    Página 1 --> offset 0
    Página 2 --> offset 10
    Página 3 --> offset 20
  */
  function obtenerTabla($pdo, $pagina, $porPagina) {
    $offset = ($pagina - 1) * $porPagina;
    if ($offset < 0) return array();
    $sql = "SELECT * FROM clientes LIMIT $offset, $porPagina";
    $result = $pdo->query($sql);
    $tabla = $result->fetchAll(PDO::FETCH_ASSOC);
    return $tabla;
  }

  function enlacesPaginas($pagina, $totalPags) {
    $textoPrimera = "Primera";
    $textoAnterior = "&lt;&lt; Anterior";
    if ($pagina >= 2) {
      $paginaAnterior = $pagina - 1;
      echo "<a href=\"?pagina=1\">$textoPrimera</a>";
      echo " | <a href=\"?pagina=$paginaAnterior\">$textoAnterior</a>";
    }
    else echo "$textoPrimera | $textoAnterior";

    echo " | $pagina de $totalPags | ";

    $textoUltima = "Última";
    $textoSiguiente = "Siguiente &gt;&gt;";
    if ($pagina < $totalPags) {
      $paginaSiguiente = $pagina + 1;
      echo "<a href=\"?pagina=$paginaSiguiente\">$textoSiguiente</a>";
      echo " | <a href=\"?pagina=$totalPags\">$textoUltima</a>";
    }
    else echo "$textoSiguiente | $textoUltima";
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Clientes paginado</title>
  <style media="screen">
    section {
      display: flex;
      flex-wrap: wrap;
    }
    article {
      width:20em;
      background-color:#eef;
      margin:0.5em;
    }
    article h2 {
      margin:0;
    }
    header a, footer a {
      text-decoration: none;
    }
    header a:hover, footer a:hover {
      background-color:#fcf;
    }
  </style>
</head>
<body>
  <header>
    <h1>Clientes paginado</h1>
    <p><?php enlacesPaginas($pagina, $totalPags) ?></p>
  </header>
  <section>
    <?php
      foreach ($tabla as $row) {
        echo "<article>";
          echo "<h2>".htmlspecialchars($row['empresa'])."</h2>";
          echo "<p>";
          echo " Contacto: <strong>".htmlspecialchars($row['contacto'])."</strong>";
          echo " <br>País: <strong>".htmlspecialchars($row['pais'])."</strong>";
          echo "</p>";
        echo "</article>";
      }
    ?>
  </section>
  <footer>
    <p><?php enlacesPaginas($pagina, $totalPags) ?></p>
  <footer>
</body>
</html>
