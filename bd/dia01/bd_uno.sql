-- Lenguaje de SQL
/*
  Mi primera base de datos
  bd1
*/

USE bd_uno;

-- DROP TABLE agenda;

CREATE TABLE agenda (
  id       INT  AUTO_INCREMENT  PRIMARY KEY,
  nombre   VARCHAR(50)  NOT NULL,
  telefono VARCHAR(50)  NULL,
  correo   VARCHAR(50)  NULL
);

CREATE TABLE almacen (
  id       INT  AUTO_INCREMENT  PRIMARY KEY,
  nombre   VARCHAR(50)   NOT NULL,
  cantidad DECIMAL(8,2)  NOT NULL  DEFAULT 0,
  precio   DECIMAL(8,2)  NOT NULL  DEFAULT 0
);

INSERT INTO agenda(nombre, telefono, correo) VALUES
  ('Pepe',  '123-45-67', 'pepe@gmail.com'),
  ('Ana',   '555-67-80', 'ana@mail.com'),
  ('Joan',  '678-78-78', 'joan@email.net'),
  ('Marc',  '901-93-90', 'marc@correo.es'),
  ('Marta', '444-22-33', 'marta@acme.com');

INSERT INTO almacen(nombre, cantidad, precio) VALUES
  ('Pera',       500,    45.5),
  ('Manzana',   1500,    56.8),
  ('Naranja',   2500,    24.3),
  ('Limón',      800,    66.9),
  ('Plátano',    900,    71.1),
  ('Ciruela',   1200,   102.3),
  ('Melocotón',  100,    40.0),
  ('Sandía',     200,    36.4);
