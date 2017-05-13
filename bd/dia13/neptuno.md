Base de datos Neptuno
=====================

  1. Archivo **bd_neptuno_crear.sql**
    - Crea una base de datos llamada "bd_neptuno" con juego de caracteres UTF8 y cotejamiento utf8_general_ci
    - Crea un usuario llamado "neptuno" en localhost con contraseña "neptuno".
    - Concede todos los permisos a este usuario sobre todas las tablas de "bd_neptuno".
    - Importa o copia y pega el código SQL al phpMyAdmin.

  2. Descarga las tablas contenidas en el archivo **bd_neptuno.sql** del Google Drive e impórtalo a "bd_neptuno".

  3. Descarga **diagrama_neptuno.png** y observa las relaciones de esta base de datos.
    - Toma nota de todas las relaciones 1 a varios que hay
        - pedidos(cliente_id) --> clientes(id)
        - ...
    - Toma nota de todas las relaciones varios a varios que hay
        - pedidos(id) <-- detalles(pedido_id, producto_id) --> productos(id)
        - ...

  4. Crea esta misma base de datos en el servidor remoto.
