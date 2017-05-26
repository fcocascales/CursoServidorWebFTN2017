<?php // ficha.php

  require_once "lib/productos.php";
  $id = obtenerParametroId();
  $ficha = obtenerFichaProducto($id);

  //=============================================
  // ENCABEZADO DE PÁGINA

  $nombre = htmlspecialchars($ficha['producto']);
  $title = "$nombre - Thor";
  $keywords = "thor, ficha, producto, $nombre";
  $description = "Ficha del producto $nombre"; // 150 carácteres
  $extra = '';
  $include = '';
  include "template/head.php";

  //=============================================
  // CUERPO DE PÁGINA

  echo '<section id="ficha">';
  echo '<h1>'.$nombre.'</h1>';
  echo '<div class="datos">';
  echo '<img src="'.obtenerFotoProducto($ficha['id']).'">';
  echo '<ul>';
  echo '<li class="precio">';
  echo '<label>Precio</label>';
  echo '<strong>€'.number_format($ficha['precio_unidad'], 2, ',', '.').'</strong>';
  echo '</li>';
  echo '<li class="cantidad">';
  echo '<label>Cantidad por unidad</label>';
  echo '<strong>'.htmlspecialchars($ficha['cantidad_por_unidad']).'</strong>';
  echo '</li>';
  echo '<li class="proveedor">';
  echo '<label>Proveedor</label>';
  echo '<strong>'.htmlspecialchars($ficha['proveedor']).'</strong>';
  echo '</li>';
  echo '<li class="categoria">';
  echo '<label>Categoría</label>';
  echo '<strong>'.htmlspecialchars($ficha['categoria']).'</strong>';
  echo '</li>';
  echo '<li class="stock">';
  echo '<label>Stock</label>';
  echo '<strong>'.htmlspecialchars($ficha['unidades_existencia']).'</strong>';
  echo '</li>';
  echo '</ul>';
  echo '</div>';
  echo '<div class="descripcion">';
  echo '<label>Descripción</label>';
  echo '<strong>'.nl2br(htmlspecialchars($ficha['descripcion'])).'</strong>';
  echo '</div>';
  echo '</section>';

  function obtenerParametroId() {
    if (isset($_GET['id'])) return intval($_GET['id']);
    else return 0;
  }

  //=============================================
  // PIE DE PÁGINA

  include "template/foot.php";
