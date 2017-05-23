<?php // categoria.php

  session_start();

  //=============================================
  // ENCABEZADO DE PÁGINA

  $nombre = obtenerTituloPagina();
  $title = "$nombre - Thor";
  $keywords = "thor, $nombre, alimento, filtro, ordenación";
  $description = "Productos de $nombre filtrado y ordenado"; // 150 carácteres
  $extra = '<link rel="stylesheet" href="mod/photocategory/styles.css">';
  $include = "mod/photocategory/include.php";
  include "template/head.php";

  function obtenerTituloPagina() {
    require_once "lib/categorias.php";
    $idActual = obtenerIdCategoriaActual();
    $nombre = obtenerNombreCategoria($idActual);
    return $nombre;
  }

  //=============================================
  // CUERPO DE PÁGINA

  require_once "lib/proveedores.php";
  require_once "lib/PaginacionProductos.php";

  // 1) Obtener los parámetros GET
  $idCategoria = obtenerParametroIdCategoria();
  $pagina      = obtenerParametroPagina();
  $rangoPrecio = obtenerParametroRangoPrecio();
  $idProveedor = obtenerParametroIdProveedor();
  $ordenacion  = obtenerParametroOrdenacion();

  // 2) Crear el objeto
  $productos = new PaginacionProductos();

  // 3) Configurar el objeto
  $productos->setPagina($pagina);
  $productos->setPorPagina(4);
  $productos->setIdCategoria($idCategoria);
  $productos->setRangoPrecio($rangoPrecio);
  $productos->setIdProveedor($idProveedor);
  $productos->setOrdenacion($ordenacion);

  // 4) Obtener el resultado
  $tabla = $productos->getTabla();
  $totalPags = $productos->getTotalPaginas();

  // 5) Guardar en variables de sesión
  $_SESSION['idCategoria'] = $idCategoria;
  $_SESSION['rangoPrecio'] = $rangoPrecio;
  $_SESSION['idProveedor'] = $idProveedor;
  $_SESSION['ordenacion'] = $ordenacion;

  function obtenerParametroIdCategoria() {
    if (isset($_GET['id'])) return intval($_GET['id']);
    elseif (isset($_SESSION['idCategoria'])) return $_SESSION['idCategoria'];
    else return 0;
  }
  function obtenerParametroPagina() {
    if (isset($_GET['pagina'])) return intval($_GET['pagina']);
    else return 1;
  }
  function obtenerParametroRangoPrecio() {
    if (isset($_GET['precio'])) return strip_tags($_GET['precio']);
    elseif (isset($_SESSION['rangoPrecio'])) return $_SESSION['rangoPrecio'];
    else return "rango0";
  }
  function obtenerParametroIdProveedor() {
    if (isset($_GET['proveedor'])) return intval($_GET['proveedor']);
    elseif (isset($_SESSION['idProveedor'])) return $_SESSION['idProveedor'];
    else return 0;
  }
  function obtenerParametroOrdenacion() {
    if (isset($_GET['ordenar'])) return strip_tags($_GET['ordenar']);
    elseif (isset($_SESSION['ordenacion'])) return $_SESSION['ordenacion'];
    else return "nombre_asc";
  }

  $listaPrecio = array(
    '0_10'=> "Entre 0 y 10€",
    '10_50'=> "Entre 10 y 50€",
    '50_'=> "50€ o más",
  );

  $listaOrdenar = array(
    'nombre_asc'=> "Por nombre",
    'precio_asc'=> "De más barato a más caro",
    'precio_desc'=> "De más caro a más barato",
  );

  function imprimirOpciones($lista, $predeterminado) {
    foreach ($lista as $value=>$option) {
      $selected = ($value==$predeterminado)? " selected" : "";
      echo "<option value=\"$value\"$selected>".htmlspecialchars($option)."</option>";
    }
  }

  function imprimirPaginacion ($pagina, $totalPags) {
    if ($totalPags == 0) return;
    echo '<ul id="paginacion">';
    foreach (range(1, $totalPags) as $pag) {
      if ($pag == $pagina) echo '<li><strong>'.$pag.'</strong></li>';
      else echo '<li><a href="?pagina='.$pag.'">'.$pag.'</a></li>';
    }
    echo '</ul>';
  }

?>

<form id="filtrar" method="get" class="filtro">
  <input type="hidden" name="id" value="<?php echo $idCategoria ?>">
  <input type="hidden" name="pagina" value="1">
  <p>
    <label for="precio">Precio:</label>
    <select id="precio" name="precio">
      <option value="">&lt;Todos&gt;</option>
      <?php imprimirOpciones($listaPrecio, $rangoPrecio) ?>
    </select>
  </p>
  <p>
    <label for="proveedor">Proveedor:</label>
    <select id="proveedor" name="proveedor">
      <option value="0">&lt;Todos&gt;</option>
      <?php imprimirOpciones(obtenerProveedoresPorCategoria($idCategoria), $idProveedor) ?>
    </select>
  </p>
  <p>
    <label for="ordenar">Ordenar:</label>
    <select id="ordenar" name="ordenar">
      <?php imprimirOpciones($listaOrdenar, $ordenacion) ?>
    </select>
  </p>
  <p>
    <button>Filtrar</button>
  </p>
</form>

<?php

  if ($totalPags == 0) {
    echo "<div><p>No hay datos</p></div>";
  }

  echo '<section id="productos">';
  foreach ($tabla as $row) {
    $image = 'img/productos/'.$row['id'].'.jpg';
    if (!file_exists($image)) $image = 'img/productos/0.png';
    $link = "producto.php?id=".$row['id'];
    echo '<article>';
    echo '<h2><a href="'.$link.'">'.htmlspecialchars($row['producto']).'</a></h2>';
    echo '<div>';
    echo   '<a href="'.$link.'"><img src="'.$image.'"></a>';
    echo   '<ul>';
    echo   ' <li class="precio">€'.number_format($row['precio'], 2, ',', '.').'</li>';
    echo   ' <li class="cantidad">'.htmlspecialchars($row['cantidad']).'</li>';
    echo   ' <li class="proveedor">'.htmlspecialchars($row['proveedor']).'</li>';
    echo   ' <li class="categoria">'.htmlspecialchars($row['categoria']).'</li>';
    echo   '</ul>';
    echo '</div>';
    echo '</article>';
  }
  echo '</section>';

  imprimirPaginacion ($pagina, $totalPags);

  //=============================================
  // PIE DE PÁGINA

  include "template/foot.php";
