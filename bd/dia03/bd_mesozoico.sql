-- Creación de tablas e introducir sus datos

-- Comentar USE para poder importar tanto en localhost como en el servidor remoto
-- USE bd_mesozoico;

CREATE TABLE  IF NOT EXISTS  dietas (
  -- Campos:
  id INT  AUTO_INCREMENT,
  dieta VARCHAR(50)  NOT NULL,
  -- Índices:
  PRIMARY KEY (id), -- Clave única principal
  UNIQUE KEY (dieta) -- Clave única en el campo dieta
);

CREATE TABLE  IF NOT EXISTS  dinosaurios (
  -- Campos:
  id INT  AUTO_INCREMENT,
  nombre VARCHAR(50)  NOT NULL,
  dieta_id INT  NULL, -- Es una clave externa: se refiere a dietas(id)
  longitud INT NULL, -- En centímetros
  -- Índices:
  PRIMARY KEY (id), -- Clave única principal
  UNIQUE KEY (nombre), -- Clave única en el campo nombre
  KEY (dieta_id) -- Clave en el campo dieta_id
);

-- Integridad referencial
--   - No te deja borrar datos si se usan en otra tabla
--   - No te deja poner datos que no existen en la otra tabla
-- Crear la relación entre la tabla dietas y la tabla dinosaurios
-- La relación va de clave externa a clave primaria
--    dinosaurios(dieta_id) ----> dietas(id)
ALTER TABLE dinosaurios
  ADD FOREIGN KEY (dieta_id) REFERENCES dietas(id) ON DELETE RESTRICT;

INSERT INTO dietas (id, dieta) VALUES
  (100, 'Herbívoro'),
  (200, 'Carnívoro'),
  (300, 'Omnívoro');

INSERT INTO dinosaurios (nombre, dieta_id, longitud) VALUES
  ('Triceratops', 100, 900),
  ('Braquiosaurio', 100, 2600),
  ('Parasaurolofus', 300, 600),
  ('Tiranosaurio Rex', 200, 1200),
  ('Velociraptor', 200, 300),
  ('Pteranodon', 300, 600),
  ('Paquicefalosaurio', 100, 200);
