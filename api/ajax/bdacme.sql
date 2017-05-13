/*
  Crear la base de datos "bdacme" con
  el usuario "bdacme" y contraseña "bdacme"
*/

CREATE USER 'bdacme'@'%' IDENTIFIED BY 'bdacme';

GRANT USAGE ON *.* TO 'bdacme'@'%' IDENTIFIED BY 'bdacme';

CREATE DATABASE IF NOT EXISTS bdacme
  CHARACTER SET utf8
  COLLATE utf8_general_ci;

GRANT ALL PRIVILEGES ON bdacme.* TO 'bdacme'@'%';
