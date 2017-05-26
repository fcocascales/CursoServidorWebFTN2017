<?php
  //=============================================
  // ENCABEZADO

  $title = "Productos";
  $extra = "";
  $include = "";
  $search = true;
  include "../template/head.php";

  //=============================================
  // CUERPO

  require_once "../../lib/PaginacionProductos.php";
  require_once "../../lib/form.php";
  require_once "../lib/gestor_contenidos.php";

  $pagina = PaginacionProductos::obtenerParametroPagina();
  $busqueda = PaginacionProductos::obtenerParametroBusqueda();
  $productos = new PaginacionProductos();
  $productos->setPagina($pagina);
  $productos->setPorPagina(20);
  $productos->setBusqueda($busqueda);
  //$productos->setIdCategoria($idCategoria);
  //$productos->setRangoPrecio($rangoPrecio);
  //$productos->setIdProveedor($idProveedor);
  //$productos->setOrdenacion($ordenacion);
  $tabla = $productos->getTablaBackend();
  $totalPags = $productos->getTotalPaginas();
  $_SESSION['busqueda'] = $busqueda;

  $match = empty($busqueda)? "" : ": <q>$busqueda</q>";
  echo '<section class="gestor">';
  echo '<div>';
  echo "<h1>Gestor de $title$match</h1>";
  echo "<p><a href=\"insertar.php\">";
  echo   "<i class=\"fa fa-plus-circle\"></i>";
  echo   " Insertar un nuevo producto</a></p>";
  echo '</div>';
  imprimirTablaGestorContenidos($tabla);
  PaginacionProductos::imprimirPaginacion($pagina, $totalPags);
  echo '</section>';

  //=============================================
  // PIE

  include "../template/foot.php";
