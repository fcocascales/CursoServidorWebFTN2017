-- bd_futbol.sql

CREATE DATABASE bd_futbol
  CHARACTER SET utf8
  COLLATE utf8_general_ci;

CREATE USER 'futbol'@'localhost'
  IDENTIFIED BY '123';

GRANT ALL PRIVILEGES
  ON bd_futbol.*
  TO 'futbol'@'localhost'
  IDENTIFIED BY '123';

USE bd_futbol;

CREATE TABLE noticias (
  id INT  AUTO_INCREMENT  PRIMARY KEY,
  titulo VARCHAR(64)  NOT NULL,
  texto TEXT,
  fecha DATE
);

INSERT INTO noticias (id, titulo, texto, fecha) VALUES
  (1, 'Cambio horario del partido', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2017-06-01'),
  (2, 'Expulsión del entrenador', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-06-02');
