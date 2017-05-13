-- Crear la base datos
-- En Google buscar: syntax to create database in mysql

-- CREATE DATABASE bd_tres;

-- CREATE DATABASE  IF NOT EXISTS  bd_tres;

CREATE DATABASE  IF NOT EXISTS  bd_tres
   CHARACTER SET utf8
   COLLATE utf8_general_ci;

-- Crear el usuario que accede a la base de datos

CREATE USER 'tres'@'localhost'
   IDENTIFIED BY 'tres';

-- Que el usuario tres tenga permisos en bd_tres
/*
  Conceder todos los permisos a todas las tablas
  de la bd_tres al usuario tres conectado desde localhost
  y con la contraseña dada.
*/
GRANT  ALL PRIVILEGES
  ON  bd_tres.*
  TO 'tres'@'localhost' IDENTIFIED BY 'tres';

-- ==============================================

-- Quitar todos los permisos, lo contrario de GRANT
REVOKE  ALL PRIVILEGES
  ON  bd_tres.*
  FROM 'tres'@'localhost';

-- Borrar el usuario
DROP USER 'tres'@'localhost';

-- Borrar la base de datos
DROP DATABASE bd_tres;

-- Borrar una tabla.
DROP TABLE bd_tres.clientes;
DROP TABLE clientes; -- Se refiere a la BD en uso
