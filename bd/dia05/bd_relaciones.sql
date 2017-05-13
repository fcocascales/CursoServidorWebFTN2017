CREATE SCHEMA bd_relaciones
  CHARACTER SET utf8
  COLLATE utf8_general_ci;

USE bd_relaciones;

CREATE TABLE personas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL
);
INSERT INTO personas VALUES
  (1, 'Pepe'),
  (2, 'Ana'),
  (3, 'Joan'),
  (4, 'Bea'),
  (5, 'Carlos'),
  (6, 'Pili');

CREATE TABLE mascotas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  persona_id INT
);
INSERT INTO mascotas VALUES
  (1, 'Pluto', 4),
  (2, 'Satán', 5),
  (3, 'Yaki', 3),
  (4, 'Tor', 3),
  (5, 'Piolín', NULL);
