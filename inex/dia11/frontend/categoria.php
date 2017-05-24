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
  $idCategoria = PaginacionProductos::obtenerParametroIdCategoria();
  $pagina      = PaginacionProductos::obtenerParametroPagina();
  $rangoPrecio = PaginacionProductos::obtenerParametroRangoPrecio();
  $idProveedor = PaginacionProductos::obtenerParametroIdProveedor();
  $ordenacion  = PaginacionProductos::obtenerParametroOrdenacion();

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

  include "inc/productos.php";

  PaginacionProductos::imprimirPaginacion($pagina, $totalPags);

  //=============================================
  // PIE DE PÁGINA

  include "template/foot.php";
