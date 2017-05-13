Base de datos de dinosaurios <br>versión 1
============================

Gestor de contenidos **CMS** (Content Management System).

Un **backend** usa un sistema de autenticación para entrar y tiene páginas webs que modifican la base de datos.

## Estructura de carpetas y archivos:

  - mesozoico → Carpeta
    - **index**.php → Enlaces a las páginas
    - **listado**.php → Listado de dinosaurios
    - **ficha**.php → La ficha del dinosaurio
    - **insertar**.php → Añadir un dinosaurio nuevo
    - **modificar**.php → Modificar un dinosaurio existente
    - **borrar**.php → Borrar un dinosaurio existente

## Pasos a seguir:

1. Crea la página **index.php** que tiene un enlace a "listado.php".

2. Crea la página **listado.php** que muestre el id y el nombre de la tabla "dinosaurios" de la base de datos "bd_mesozoico".

3. Crea la página **ficha.php** que muestre los datos de un sólo dinosaurio. Usa el parámetro URL llamado *id* para encontrar el dinosaurio deseado. Muestra el nombre, la dieta y la longitud en metros del dinosaurio. Si no se puso el parámetro id en la URL muestra un mensaje de error.

4. En la página **listado.php** añade un enlace a la ficha de cada dinosaurio según el id que tenga cada uno en la BD.
 - ficha.php?id=1
 - ficha.php?id=2
 - ficha.php?id=3 ...  

5. Crea la página **insertar.php** que tenga un formulario con 3 campos: nombre, dieta_id y longitud. El campo dieta_id será un SELECT cuyas opciones deben coincidir con el contenido de la tabla dietas. Al pulsar el botón del formulario se han de enviar los datos mediante el método POST a la página "insertar_bd.php".

6. Crea la página **insertar_bd.php** que recoja los datos enviados en el formulario "insertar.php". Los datos recogidos se han de utilizar para añadir un nuevo dinosaurio a la tabla de dinosaurios. Usa la orden "INSERT INTO" del SQL.
