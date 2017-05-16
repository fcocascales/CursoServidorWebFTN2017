<?php

  require_once "conexion.php";

  $pdo = conexion();
  $nombre = obtenerParametroNombre();
  $pagina = obtenerParametroPagina();
  $porPagina = 4;
  $tabla = obtenerPaginaResultados($pdo, $nombre, $pagina, $porPagina);
  $totalPags = obtenerTotalPaginas($pdo, $porPagina);

  if ($pagina > $totalPags) {
    header("Location: productos.php");
    exit;
  }

  function obtenerParametroNombre() {
    if (isset($_GET['nombre']))
      return strip_tags($_GET['nombre']);
    else return "";
  }
  function obtenerParametroPagina() {
    if (isset($_GET['pagina']))
      return intval($_GET['pagina']);
    else return 1;
  }

  function obtenerPaginaResultados($pdo, $nombre, $pagina, $porPagina) {
    $offset = ($pagina - 1) * $porPagina;
    if ($offset < 0) return array();
    $sql = "SELECT SQL_CALC_FOUND_ROWS
        p.producto, p.precio_unidad, c.categoria,
        r.empresa AS proveedor
      FROM productos p
        LEFT JOIN categorias c ON p.categoria_id = c.id
        LEFT JOIN proveedores r ON p.proveedor_id = r.id
      WHERE p.producto LIKE ?
      LIMIT $offset, $porPagina";
    $result = $pdo->prepare($sql);
    $result->execute(array("%$nombre%"));
    $tabla = $result->fetchAll(PDO::FETCH_ASSOC); // Opcional
    return $tabla;
  }
  function obtenerTotalPaginas($pdo, $porPagina) {
    $sql = "SELECT CEIL(FOUND_ROWS()/$porPagina)";
    $totalPags = $pdo->query($sql)->fetch(PDO::FETCH_NUM)[0];
    return $totalPags;
  }
  function imprimirEnlacesPaginas($nombre, $pagina, $totalPags) {
    if ($totalPags == 0) return;
    echo " | $pagina de $totalPags | ";
    if ($pagina > 1) {
      $link = enlazarPagina($nombre, $pagina-1);
      echo " <a href=\"$link\">&larr; Anterior</a> ";
    }
    if ($pagina < $totalPags) {
      $link = enlazarPagina($nombre, $pagina+1);
      echo " <a href=\"$link\">Siguiente &rarr;</a> ";
    }
  }

  /*
    enlazarPagina('queso', 3) --> "?pagina=3&nombre=queso"
  */
  function enlazarPagina($nombre, $pagina) {
    $assoc = array(
      'pagina'=> $pagina,
      'nombre'=> $nombre,
    );
    return "?".http_build_query($assoc);
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Productos</title>
  <style media="screen">
    main { display:flex; flex-wrap:wrap; }
    section { width:20em; margin:1em; }
    section h2 { margin:0; }
    section p { margin:0.3em; }
  </style>
</head>
<body>
  <header>
    <h1>Búsqueda de productos</h1>
    <form method="get">
      <input type="hidden" name="pagina" value="1">
      <input type="text" name="nombre"
        value="<?php echo htmlspecialchars($nombre) ?>">
      <button>Filtrar</button>
    </form>
    <p><?php imprimirEnlacesPaginas($nombre, $pagina, $totalPags); ?></p>
    <?php if ($totalPags == 0) echo "<p>No hay resultados</p>"; ?>
  </header>
  <main>
    <?php
      foreach ($tabla as $row) {
        echo "<section>";
        echo "<h2>".htmlspecialchars($row['producto'])."</h2>";
        echo "<p>".htmlspecialchars($row['proveedor'])."</p>";
        echo "<p>".htmlspecialchars($row['categoria'])."</p>";
        echo "<p>".number_format($row['precio_unidad'], 2, ',', '.')." €</p>";
        echo "</section>";
      }
    ?>
  </main>
  <footer>
    <p><?php imprimirEnlacesPaginas($nombre, $pagina, $totalPags); ?></p>
  </footer>
</body>
</html>
