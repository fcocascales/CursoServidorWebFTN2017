Backend 8
=========

 - [Google drive](http://goo.gl/JcfWHb)
 - [GitHub](https://github.com/fcocascales/CursoServidorWebFTN2017)

## Ejercicio: Gestor de contenidos de categorías

  - Añadir el campo "activado" en la tabla categorías que sea BOOLEAN y por defecto TRUE. Crea "database/actualizacion3.sql" para realizar los cambios en la base de datos. Las categorías desactivadas no deben salir en el frontend: ni en el menú, ni en el buscador.
  - Es similar al gestor de productos.
  - Copia y adapta los archivos de "backend/productos"
  - Cada categoría tiene una foto de 800x200 que se debe subir.
  - El listado de categorías no necesita paginación ni filtro
  - Está ubicado en la carpeta "backend/categorias"

## Al insertar o modificar un producto

  - Al seleccionar en el SELECT categoría, filtrar el SELECT de proveedores. Usar AJAX.
  - Ejercicio anterior de AJAX:
    - api/dia07/ejercicio14
    - api/dia06/ejercicio12/continentes.json.php
  - En las páginas "productos/insertar.php" y "productos/modificar.php" es dónde ha de funcionar.
  - En "backend/template/head.php" hay un enlace a jQuery y un enlace a "js/backend.js".
  - Modificar el archivo "js/backend.js" 

## MVC Modelo Vista Controlador

  - PHP Symfony — Muy bueno pero complicado
  - PHP Laravel — Esqueleto de Symfony y más simple
  - PHP **CodeIgniter** — Sencillo y potente
  - Ruby on Rails    
