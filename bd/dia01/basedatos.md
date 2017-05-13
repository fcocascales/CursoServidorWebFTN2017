Base de datos
=============

## ¿Qué es una base de datos?

Un lugar donde almacenar datos de forma organizada.

  - Evitar redundancias, no repetir datos.
  - Multiusuario: usuario y contraseña
  - Integridad de los datos.
      - Tipos de datos: texto, número, lógicos, etc.
      - Evitar referencia a datos inexistentes.

## Base de datos relacional

Software libre:
  - MySQL - La más usada en webs. Es muy estable.
  - SQLite - En un solo fichero

Software privado (licencia):
  - MS-Access - Base de datos de escritorio (1 sólo fichero)
  - Oracle - La primera BD relacional - Empresarial
  - MS-SQL Server - Empresarial

Los datos se almacenan en tablas. Las tablas se relacionan entre sí. Todas usan el lenguaje SQL.

## Tabla

Una tabla tiene filas y columnas. Se parece a una hoja de cálculo.

Las **columnas** son los campos. Ejemplo: nombre, dirección, CP, importe, ...

Las **filas** son los registros. Ejemplo: Los datos de un cliente, los datos de otro cliente, etc.

La tabla debe tener una **clave primaria** para identificar cada fila. Ejemplos: DNI de las personas, la matrícula de los coches.

Una **relación** es cuando una tabla tiene que hacer referencia a otra tabla. Las relaciones van de una *clave externa* de una tabla a la *clave primaria* de otra tabla. Tablas que usan datos de otras tablas. La tabla facturas usa datos de la tabla clientes y de la tabla productos.
