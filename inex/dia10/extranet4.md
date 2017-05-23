Extranet 4: Continuación del frontend
=====================================

  1. Copiar **dia09/frontend** a **dia10/frontend**
  2. Copiar **dia09/database** a **dia10/database**

## Estructura del frontend

  - **frontend**
    - *index.php* — Página principal
    - *categoria.php* — Página de productos por categoría
    - **css** — Hojas de estilo
      - *frontend.css* — Estructura principal
      - *filtro.css* — Clase para el formulario de filtro
    - **img** — Imágenes
      - *categorias* — Imágenes de cada categoría: 1.jpg, 2.jpg, etc.
      - *productos* — Imágenes de cada producto: 1.jpg, 2.jpg, etc.
      - *logo.png* — Logo de la web
    - **js** — Javascript
      - *frontend.js* — Script general
      - *jquery-3.2.1.min.js* — jQuery minimizado
    - **lib** — Funciones y clases PHP
      - *conexion.php* — Encapsulamiento de la clase PDO
      - *categorias.php* — Acceso a la tabla categorías
      - *proveedores.php* — Acceso a la tabla proveedores
      - *PaginacionProductos.php* — Paginación de la tabla productos
    - **mod** — Plugins para las páginas
      - *fa* — Iconos Font-Awesome
      - *photocategory* — Mostrar una foto cabecera de la categoría
      - *slider* - Carrusel de fotos para la página principal
    - **template** — Plantilla de todas las páginas
      - *head.php* — Inicio de la página
      - *foot.php* — Fin de la página

## Renombrar "css/classes.css" por "filtro.css"

  - Ajustar el nombre en "template/head.php"   

## Acabar "lib/PaginacionProductos.php"  

  - Usado en la página "categoria.php"

## Filtrar el desplegable de proveedores por categoría

  - En la página "categoria.php"
  - Añadir una función en "lib/proveedores.php"

## Mostrar los productos formateados en HTML y CSS

  - En la página "categoria.php"

## Enlaces de paginación en "categoria.php"  

  - Tener en cuenta cuando el total de páginas es 0

## Guardar los filtros en variables de sesión

  - En la página "categoria.php"
  - Los filtros guardados son: idcategoria, idproveedor, rangoprecios y ordenacion.
  - Hay que resetear el proveedor al cambiar de categoría.
    - Añadir al menú de categorías `&proveedor=` (head.php)
  - El formulario ha de enviar siempre página 1
  - Añadir el mensaje "No hay datos" cuando el total de páginas es 0.

## Botón "hamburguesa" para ocultar o mostra el menú en móvil.

   - Añadir `<div id="toggle_nav"><i class="fa fa-bars></i> Menú</div>"` en "template/head.php"
   - Añadir estilos para #toggle_nav en "frontend.css"
   - Añadir Javascript en "frontend.js"   

## Que los filtros envien el formulario al seleccionar un elemento del desplegable sin necesidad de pulsar el botón "Filtrar"

   - Añadir el código en "frontend.js"
   - Añadir el id "filtrar" al formulario
