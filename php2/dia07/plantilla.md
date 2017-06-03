Plantilla en PHP
================

La plantilla es lo que tienen en común las páginas de un sitio web. Suelen tener el mismo encabezado y el mismo pie.

## Primer sistema para hacer una plantilla

Plantilla:
  - cabeza.php - La parte de arriba de la página
  - pie.php - La parte de abajo de la página

Páginas:
  - Incluir la "cabeza.php" arriba e incluir el "pie.php" abajo.

        <?php include "cabeza.php" ?>
        Contenido de una página
        <?php include "pie.php" ?>


## Segundo sistema para hacer una plantilla

Plantilla y página:
  - index.php - Una sóla página web

        ...
        <?php include "contenido?.php" ?>
        ...

  Para cambiar los contenidos se usa un parámetro GET

Contenidos:
  - contenido1.php
  - contenido2.php
  - contenido3.php

## Ejercicio de plantilla

Sitio web que tenga:
  - *Título:*     Galería de fotos
  - *Menú:*       Tokyo, París, New York
  - *Contenidos:* Las fotos de las ciudades
  - *Pie:*        Mi nombre

        <img src="foto1.jpg">

        
