/*
  Crea la base de datos y su usuario
    en http://localhost/phpmyadmin

  Para crear la BD y su usuario en el
    servidor remoto hay que utilizar
    el Panel de Control de la web.
*/
CREATE DATABASE  IF NOT EXISTS  bd_neptuno
  CHARACTER SET utf8
  COLLATE utf8_general_ci;

CREATE USER  IF NOT EXISTS  'neptuno'@'localhost'
  IDENTIFIED BY 'neptuno';

GRANT ALL PRIVILEGES
  ON bd_neptuno.*
  TO 'neptuno'@'localhost' IDENTIFIED BY 'neptuno';
