USE bd_dos;

-- DROP TABLE  IF EXISTS  cursos;

CREATE TABLE  IF NOT EXISTS  cursos (
  id INT  AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50)  NOT NULL,
  num_alumnos INT  DEFAULT 0,
  num_horas DECIMAL(8,2)  DEFAULT 0
);

INSERT INTO cursos (nombre, num_alumnos, num_horas) VALUES
  ('Mates',      15,  40.5),
  ('Música',     20, 120.6),
  ('Filosofía',  18,  90.3),
  ('Gimnasia',   22,  60.9),
  ('Lengua',     17, 100.0);
