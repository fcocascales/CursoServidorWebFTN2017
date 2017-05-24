Extranet 5: Continuación del frontend
=====================================

  1. Copiar **dia10/frontend** a **dia11/frontend**
  2. Copiar **dia10/database** a **dia11/database**

## Actualizacion de la base de datos "bd_extranet"

Usa el *phpMyAdmin* para importar o ejecuta el código SQL **database/actualizacion2.sql** sobre la base de datos "bd_extranet".

Esto añade 3 campos en la tabla **productos**
  - *descripcion* — Una descripción del producto
  - *activado* — Indica si el producto está en activo o no
  - *destacado* — Los productos destacados aparecen en la página principal "index.php"

## Modificar la consulta SQL de "lib/PaginacionProductos.php"

  - Tener en cuenta el nuevo *activado* en el WHERE

## Mostrar los productos destacados en "index.php"

  - No hay filtros ni paginación
  - Mostrar los productos igual que en "categoria.php"
  - El código `<section id="productos">` lo usaremos en tres páginas: "categoria.php", "index.php" y en "buscador.php". Para no repetir el código lo extraemos de "categoria.php" y lo ponemos en "inc/productos.php". Hay que crear la carpeta "inc" (include).
  - Incluir "inc/productos.php" en la página "index.php"
  - Crear el fichero "lib/productos.php" con la función `obtenerProductosDestacados()`

## Crear la ficha del producto en "ficha.php"

  - Es una página, va en la carpeta raíz y usa la plantilla.

## Realizar la página "buscador.php"

  - Es una página basada en la plantilla
  - El formulario de búsqueda se encuentra en "template/head.php"
  - Duplicar "categoria.php" como "buscador.php"
  - Modificar "lib/PaginacionProductos.php"
  - Búsqueda por palabras [Indices FULLTEXT](https://desarrolloweb.com/articulos/2087.php)

## Poner las funciones usadas en varios sitios en un sólo lugar

  - Guardar en **lib/PaginacionProductos.php**
    - *obtenerParametroPagina()*
      - categoria.php
      - buscador.php      
    - *imprimirPaginacion()*
      - categoria.php
      - buscador.php
  - Guardar en **lib/productos.php**      
    - *obtenerFoto()*
      - ficha.php
      - inc/productos.php
