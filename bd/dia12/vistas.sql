/*
  VISTAS

  Un SELECT con un nombre que se guarda en la BD.

  Las vistas y las tablas se usan igual.

  La vista no almacena datos, toma los datos
  de las tablas.

  La vista permite hacer cambios en las tablas
  subyacentes.

*/

-- Consulta
SELECT * FROM dinosaurios WHERE dieta_id = 200;

-- Borrar la vista por si ya existía
DROP VIEW  IF EXISTS  carnivoros;

-- Crear una vista
CREATE VIEW carnivoros AS
  SELECT * FROM dinosaurios WHERE dieta_id = 200;

-- Usar la vista
SELECT * FROM carnivoros;

/*
  Crear una segunda vista
*/

CREATE VIEW dinosaurios2 AS
  SELECT d.id, d.nombre, d.dieta_id, a.dieta, d.longitud
  FROM dinosaurios d
    INNER JOIN dietas a ON d.dieta_id = a.id;

SELECT * FROM dinosaurios2;
SELECT nombre, dieta FROM dinosaurios2;
SELECT nombre, dieta FROM dinosaurios2 WHERE dieta = 'carnivoro';
