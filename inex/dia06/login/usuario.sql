CREATE DATABASE IF NOT EXISTS bd_trantor
   CHARACTER SET utf8
   COLLATE utf8_general_ci;

USE bd_trantor;

CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(16) NOT NULL UNIQUE KEY,
  clave VARCHAR(40) NOT NULL, -- SHA1
  nombre VARCHAR(32) NOT NULL,
  correo VARCHAR(64) NOT NULL,
  activado BOOLEAN DEFAULT TRUE
);  

INSERT INTO usuarios(id, usuario, clave, nombre, correo, activado)
VALUES (1, 'pepe', SHA1('123'), 'José', 'pepe@correo.es', TRUE),
       (2, 'bea', SHA1('123'), 'Beatriz', 'bea@correo.es', TRUE);
