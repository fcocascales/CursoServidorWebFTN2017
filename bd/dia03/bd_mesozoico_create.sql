CREATE DATABASE  IF NOT EXISTS  bd_mesozoico
   CHARACTER SET utf8
   COLLATE utf8_general_ci;

CREATE USER  IF NOT EXISTS  'mesozoico'@'localhost'
   IDENTIFIED BY 'mesozoico';

GRANT  ALL PRIVILEGES
  ON  bd_mesozoico.*
  TO 'mesozoico'@'localhost' IDENTIFIED BY 'mesozoico';
