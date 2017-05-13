Ejercicio de base de datos
==========================

Uso del lenguaje **SQL** y del gestor de MySQL **phpMyAdmin**

Crea en http://localhost/phpMyAdmin una nueva base de datos llamada **bd_mesozoico** con cotejamiento *utf8_general_ci*

Crea el archivo *bd_mesozoico.sql*. Aquí introduciremos el código para crear 2 tablas con sus datos correspondientes.

  - Tabla **dietas**. Su campos son:
    - id - Número entero, autoincremental y clave primaria.
    - dieta - Texto de 50 de largo. Clave única.
  - Tabla **dinosaurios**. Campos:
    - id - Número entero, autoincremental y clave primaria.
    - nombre - Texto de 50 de largo. Clave única.
    - dieta_id - Número entero. Clave indexada.
    - longitud - Número entero. En centímetros.

De momento crea las tablas sin poner lo de clave única y clave indexada.
Introduce algunos datos en ambas tablas con la orden INSERT INTO.
Importar el fichero SQL a la bd en el phpMyAdmin
