Diferencias del SQL entre MySQL y SQLite
========================================

En MySQL se pueden insertar varios registros con una sóla orden INSERT INTO.

En SQLite al crear una tabla indicas los tipos de datos (al igual que en MySQL) pero realmente no tiene tipos de datos porque, por ejemplo, en un campo numérico puedes insertar texto.

SQLite usa un solo fichero para almacenar la base de datos. El fichero se sube al servidor remoto junto a las páginas PHP.

Con MySQL se usa el panel de control remoto para crear la base datos y  el usuario de la misma. Para crear las tabla y meter los datos se usa el phpMyAdmin del servidor remoto.

Para crear una base de datos SQLite se puede usar:
Sqliteman — SQLite manager by Petr Vanek
