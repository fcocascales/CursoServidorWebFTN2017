<?php // inc/productos.php

require_once "lib/productos.php";

/*
  Este include necesita:
    - Una variable global $tabla (id, producto, precio, cantidad, proveedor, categoria)
    - La hoja de estilos "css/productos.css"
*/

if (empty($tabla)) {
  echo "<div><p>No hay datos</p></div>";
}

echo '<section id="productos">';
foreach ($tabla as $row) {
  $link = "ficha.php?id=".$row['id'];
  echo '<article>';
  echo '<h2><a href="'.$link.'">'.htmlspecialchars($row['producto']).'</a></h2>';
  echo '<div>';
  echo   '<a href="'.$link.'"><img src="'.obtenerFotoProducto($row['id']).'"></a>';
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
