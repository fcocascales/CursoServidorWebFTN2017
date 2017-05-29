<?php // buscador.php

  session_start();

  //=============================================
  // ENCABEZADO DE PÁGINA

  $title = "Buscador - Thor";
  $keywords = "thor, buscador, alimento, filtro, ordenación";
  $description = "Buscador de productos alimentarios"; // 150 carácteres
  $extra = '';
  $include = '';
  include "template/head.php";

  //=============================================
  // CUERPO DE PÁGINA

  require_once "lib/PaginacionProductos.php";

  // 1) Obtener los parámetros GET
  $busqueda = PaginacionProductos::obtenerParametroBusqueda();
  $pagina   = PaginacionProductos::obtenerParametroPagina();

  // 2) Crear el objeto
  $productos = new PaginacionProductos();

  // 3) Configurar el objeto
  $productos->setPagina($pagina);
  $productos->setPorPagina(8);
  $productos->setBusqueda($busqueda);

  // 4) Obtener el resultado
  $tabla = $productos->getTabla();
  $totalPags = $productos->getTotalPaginas();

  // 5) Guardar en variables de sesión
  $_SESSION['busqueda'] = $busqueda;

  echo "<h1>Coincidencias de <q>".htmlspecialchars($busqueda)."</q></h1>";
  include "inc/productos.php";
  PaginacionProductos::imprimirPaginacion ($pagina, $totalPags);

  //=============================================
  // PIE DE PÁGINA

  include "template/foot.php";
