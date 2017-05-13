Ejercicio de base datos
=======================

Vamos a **crear una base de datos** que contenga una sola tabla. Para ello crearemos un archivo SQL. Una vez creado el archivo SQL se ha de importar, o copiar y pegar, en http://localhost/phpmyadmin

- La base de datos se llamará **bd_dos** y tendrá cotejamiento *utf8_general_ci*. Hazla usando phpMyAdmin.

- El archivo del código fuente se llamará **bd_dos.sql**. Debe tener el código necesario para crear la tabla e insertar sus datos.

- La tabla se llamará **cursos**. Su estructura y datos son los siguientes:

|curso     |nºalumnos|nºhoras|
|----------|---------|-------|
|Mates     | 15      | 40    |
|Música    | 20      | 120   |
|Filosofía | 18      | 90    |
|Gimnasia  | 22      | 60    |
|Lengua    | 17      | 100   |

Copia de seguridad
------------------

Una vez creada la base de datos *bd_dos* y su tabla *cursos* exporta la base de datos en un archivo llamado **bd_dos_pma.sql**.

Compara tu archivo *bd_dos.sql* con el archivo *bd_dos_pma.sql* generado por phpMyAdmin.
