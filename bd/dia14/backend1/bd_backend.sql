CREATE DATABASE  IF NOT EXISTS  bd_backend
  CHARACTER SET utf8
  COLLATE utf8_general_ci;

USE bd_backend;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  user VARCHAR(20) NOT NULL,
  pass VARCHAR(40) NOT NULL, -- SHA1
  enabled BOOLEAN DEFAULT FALSE,
  email VARCHAR(50)
);

INSERT INTO users VALUES
  (1, 'José',   'pepe', SHA1('pepe'), TRUE, 'pepe@correo.es'),
  (2, 'Josefa', 'pepa', SHA1('pepa'), TRUE, 'pepa@correo.es');
