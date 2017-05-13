Base de datos de dinosaurios <br>versión 2
============================

Gestor de contenidos **CMS** (Content Management System).

Un **backend** usa un sistema de autenticación para entrar y tiene páginas webs que modifican la base de datos.

## Estructura de carpetas y archivos:

  - mesozoico → Carpeta
    - **index**.php → Enlaces a las páginas
    - **listado**.php → Listado de dinosaurios
    - **ficha**.php → La ficha del dinosaurio

    - **insertar**.php → Formulario de añadir un dinosaurio nuevo
    - **insertar_bd**.php → Añadir un dinosaurio nuevo a la BD

    - **borrar**.php → Formulario de borrar un dinosaurio existente
    - **borrar_bd**.php → Borrar un dinosaurio existente en la BD

    - **modificar**.php → Formulario de modificar un dinosaurio existente
    - **modificar_bd**.php → Modificar un dinosaurio existente en la BD



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

7. En la página **listado.php** añade enlaces a la futuras páginas "borrar.php" y "modificar.php" pasando el parámetro *id* por la URL al igual que se hizo con "ficha.php"
 - modificar.php?id=1  borrar.php?id=1
 - modificar.php?id=2  borrar.php?id=2
 - modificar.php?id=3  borrar.php?id=3 ...  

8. La página **borrar.php** es una página para confirmar el borrado. Usa el parámetro URL llamado *id* para encontrar el nombre del dinosaurio en la BD. Muestra un mensaje en la página que diga si se desea borrar el dinosaurio con tal nombre. Crea un formulario que tenga un campo oculto para el id y un botón que envíe el formulario a la página "borrar_bd.php" con el método POST.

9. La página **borrar_bd.php** realiza el borrado del dinosaurio. Recupera el parámetro POST llamado *id* que se envió desde el formulario. Usa dicho id para borrar el dinosaurio mediante la orden: "DELETE FROM dinosaurios WHERE id = ?". Una vez borrado haz una redirección a la página del listado de dinosaurios: header("Location: listado.php");

10. La página **modificar.php** es inicialmente un duplicado de la página "insertar.php". Usa el parámetro URL llamado *id* para encontrar los campos nombre, dieta_id y longitud en la BD. Muestra esta información en los campos del formulario. Añade un campo oculto para el id. El formulario debe enviar toda estos datos a la página "modificar_bd.php" con el método POST.

11. La página **modificar_bd.php** recoge todos los datos enviados en el formulario: id, nombre, dieta_id y longitud. Mediante la ejecución de la orden "UPDATE dinosaurios SET nombre = ?, dieta_id = ?, longitud = ? WHERE id = ?" podemos realizar los cambios en la BD. Muestra un mensaje indicando que la actualización del dinosaurio se ha efectuado.
