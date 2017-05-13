Ejercicio
=========

## Crear el archivo **bd_astros.sql** en el editor.

  1. Crear la base de datos *bd_astros* con cotejamiento utf8_general_ci
  2. Crear el usuario *carl* con contraseña *sagan*.
  3. Conceder todos los permisos al usuario *carl* en *bd_astros*.
  4. Crear la tabla *planetas* con los siguientes campos:
    - id es autoincremental (clave primaria)
    - nombre es texto de 50 obligatorio (clave única)
    - diámetro es nº entero en kilómetros
    - distancia al Sol en millones de kilómetros    
  5. Crear la tabla *satelites* con los siguientes campos:
    - id es autoincremental (clave primaria)
    - nombre es texto de 50 obligatorio (clave única)
    - planeta_id es una clave externa (clave)
    - diámetro es nº entero en kilómetros
  6. Introducir algunos datos en planetas y satélites.
  7. Crear la relación del campo clave externa de satélites al campo clave primaria de planetas.
    - satelites(planeta_id) --> planetas(id)

## Importar el fichero SQL al phpMyAdmin

Comprobar que se está cumpliendo la **integridad refencial**.
  - Intentar borrar un planeta que tenga satélites. No se debe poder hacer.
  - Intentar poner a un satélite un planeta que no existe. No debe dejar hacerlo.

## Publicar la BD en el servidor remoto

- Acceder a http://ALUMNO.fomentformacio.tech:8083 para crear la base de datos y el usuario con su contraseña.
- Crear una nueva versión del archivo SQL llamado *bd_astros_remoto.sql* que no tenga los 3 primeros puntos relativos a la creación de la BD, el usuario y los permisos.
- Acceder a http://ALUMNO.fomentformacio.tech/phpmyadmin para importar el nuevo archivo SQL.
