Backend 7
=========

## Añadir iconos font-awesome

[fontawesome.io](http://fontawesome.io/icons/)

 - Buscar — `<i class="fa fa-search"></i>`
 - Insertar — `<i class="fa fa-plus-circle"></i>`
 - Modificar — `<i class="fa fa-pencil-square-o"></i>`
 - Borrar — `<i class="fa fa-times"></i>`
 - Desconectar — `<i class="fa fa-power-off"></i>`

## Icono de favorito

  - Fichero llamado "favicon.ico" de 16 x 16 píxeles
  - En el `<head>` añadir la siguiente línea:
    `<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">`
  - Para convertir un PNG a ICO se puede usar el GIMP. Exportar a ICO.

## Los buscadores no deben indexar el backend

  - Los buscadores tiene programas llamados arañas o robots que rastrean Internet.
  - `<meta name="robots" content="noindex">`
  - [meta-robots](https://desarrolloweb.com/articulos/etiqueta-meta-robots.html)

## Insertar un nuevo producto

  - frontend/backend/productos/insertar.php
  - Un formulario
  - Insertar en la BD el producto
  - Averiguar el id del producto insertado
  - Si se ha subido una foto guardarla en
    - frontend/img/productos  
  - Extraer los input y select en "campos.php" para incluirlo tanto en "insertar.php" como en "modificar.php"
  - Al seleccionar en el SELECT categoría, filtrar el SELECT de proveedores. Usar AJAX.
