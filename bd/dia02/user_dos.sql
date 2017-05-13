/*DROP DATABASE  IF EXISTS  bd_dos;*/
CREATE DATABASE  IF NOT EXISTS  bd_dos
  CHARACTER SET utf8
  COLLATE utf8_general_ci;

/*DROP USER 'user_dos'@'localhost';*/
CREATE USER  IF NOT EXISTS  'user_dos'@'localhost'
  IDENTIFIED BY '123';

/*REVOKE ALL PRIVILEGES
   ON bd_dos.*
   FROM 'user_dos'@'localhost';*/
GRANT ALL PRIVILEGES
  ON bd_dos.*
  TO 'user_dos'@'localhost';
  -- WITH GRANT OPTION;
