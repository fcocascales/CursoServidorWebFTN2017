-- 1. Mostrar el nombre de los planetas y el nombre de los satélites en un producto cartesiano.

SELECT p.nombre, s.nombre
FROM planetas p CROSS JOIN satelites s;
-- Aparecen 136 filas = 8 planetas * 17 satélites

-- 2. Mostrar el nombre de los planetas que tengan satélites y el nombre de éstos.
SELECT p.nombre, s.nombre
FROM planetas p
  INNER JOIN satelites s ON p.id = s.planeta_id;
-- Aparecen 17 filas = Número de relaciones que hay =
--   17 satélites porque todos los satélites tienen relación.

-- 3. Mostrar el nombre de todos los planetas y el nombre de sus satélites correspondientes.
SELECT p.nombre, s.nombre
FROM planetas p
  LEFT JOIN satelites s ON p.id = s.planeta_id;
-- Sale 19 filas = 17 satélites + 2 planetas sin satélite

-- 4. Mostrar una lista con el nombre y el diámetro de todos los planetas y de todos los satélites indicando si se trata de un planeta o de un satélite. Ordénalo por el nombre.
SELECT nombre, diametro, 'PLANETA' tipo
FROM planetas
UNION
SELECT nombre, diametro, 'SATÉLITE'
FROM satelites
ORDER BY 1;
-- Sale 25  = 8 planetas + 17 satélites
