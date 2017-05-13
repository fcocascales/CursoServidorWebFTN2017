-- 1
CREATE DATABASE  IF NOT EXISTS  bd_astros
  CHARACTER SET utf8
  COLLATE utf8_general_ci;

-- 2
CREATE USER  IF NOT EXISTS  'carl'@'localhost'
  IDENTIFIED BY 'sagan';

-- 3
GRANT ALL PRIVILEGES
  ON bd_astros.*
  TO 'carl'@'localhost' IDENTIFIED BY 'sagan';

-- 3.5
USE bd_astros;

-- 4
CREATE TABLE  IF NOT EXISTS  planetas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  diametro INT COMMENT 'kilómetros',
  distancia INT COMMENT 'millones de kms',
  -- Índices:
  UNIQUE KEY (nombre)
);

-- 5
CREATE TABLE  IF NOT EXISTS  satelites (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  planeta_id INT NULL,
  diametro INT COMMENT 'kilómetros',
  -- Índices:
  UNIQUE KEY (nombre),
  KEY (planeta_id)
);

-- 6
INSERT IGNORE INTO planetas (id, nombre, diametro, distancia) VALUES
  (1, 'Mercurio', 4878, 58),
  (2, 'Venus', 12100, 108),
  (3, 'La Tierra', 12756, 146),
  (4, 'Marte', 6787, 228),
  (5, 'Júpiter', 142984, 778),
  (6, 'Saturno', 120536, 1429),
  (7, 'Urano', 51108, 2870),
  (8, 'Neptuno', 49538, 4504);
  
INSERT IGNORE INTO satelites (nombre, planeta_id, diametro) VALUES
  ('La Luna', 3, 3474),
  ('Fobos', 4, 21),
  ('Deimos', 4, 12),
  ('Ganímedes', 5, 5262),
  ('Calisto', 5, 4800),
  ('Ío', 5,	3630),
  ('Europa', 5, 3140),
  ('Titan', 6, 5150),
  ('Rea', 6, 1529),
  ('Jápeto', 6, 1500),
  ('Dione', 6, 1128),
  ('Tetis', 6, 1060),
  ('Titania', 7, 1590),
  ('Oberón', 7, 1522),
  ('Umbriel', 7, 1172),
  ('Ariel', 7, 1157),
  ('Tritón', 8, 2707);

-- 7
ALTER TABLE satelites
  ADD FOREIGN KEY (planeta_id)
    REFERENCES planetas(id)
    ON DELETE RESTRICT;
