-- 1) Quitar los permisos

REVOKE ALL PRIVILEGES
  ON bd_astros.*
  FROM 'carl'@'localhost';

-- 2) Borrar el usuario

DROP USER  IF EXISTS  'carl'@'localhost';

-- 3) Borrar la base de datos

USE bd_astros;
DROP TABLE  IF EXISTS  satelites;
DROP TABLE  IF EXISTS  planetas;

DROP DATABASE  IF EXISTS   bd_astros;
-- DROP SCHEMA bd_astros;
