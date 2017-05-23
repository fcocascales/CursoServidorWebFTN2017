<?php // categoria.php

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
  $productos->setPorPagina(6);
  $productos->setIdCategoria($idCategoria);
  $productos->setRangoPrecio($rangoPrecio);
  $productos->setIdProveedor($idProveedor);
  $productos->setOrdenacion($ordenacion);

  // 4) Obtener el resultado
  $tabla = $productos->getTabla();
  $totalPags = $productos->getTotalPaginas();

  function obtenerParametroIdCategoria() {
    if (isset($_GET['id'])) return intval($_GET['id']);
    else return 0;
  }
  function obtenerParametroPagina() {
    if (isset($_GET['pagina'])) return intval($_GET['pagina']);
    else return 1;
  }
  function obtenerParametroRangoPrecio() {
    if (isset($_GET['precio'])) return strip_tags($_GET['precio']);
    else return "rango0";
  }
  function obtenerParametroIdProveedor() {
    if (isset($_GET['proveedor'])) return intval($_GET['proveedor']);
    else return 0;
  }
  function obtenerParametroOrdenacion() {
    if (isset($_GET['ordenar'])) return strip_tags($_GET['ordenar']);
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

?>

<form method="get" class="filtro">
  <input type="hidden" name="id" value="<?php echo $idCategoria ?>">
  <input type="hidden" name="pagina" value="<?php echo $pagina ?>">
  <p>
    <label for="precio">Precio:</label>
    <select id="precio" name="precio">
      <option></option>
      <?php imprimirOpciones($listaPrecio, $rangoPrecio) ?>
    </select>
  </p>
  <p>
    <label for="proveedor">Proveedor:</label>
    <select id="proveedor" name="proveedor">
      <option></option>
      <?php imprimirOpciones(obtenerProveedores(), $idProveedor) ?>
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

  // TODO : Enlaces a la página anterior y siguiente
  // TODO : Imprimir los productos correctamente

  // PROVISIONAL
  echo "<h2>Total de páginas</h2>";
  echo $totalPags;
  echo "<h2>Tabla de productos</h2>";
  echo "<pre>";
  print_r($tabla);
  echo "</pre>";

  //=============================================
  // PIE DE PÁGINA

  include "template/foot.php";
