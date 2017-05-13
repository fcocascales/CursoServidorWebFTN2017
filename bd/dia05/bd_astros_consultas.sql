/*
  SELECT campos y fórmulas
  FROM tablas
  WHERE filtro por los campos
  ORDER BY campos
  LIMIT filtro por el número de fila
*/
-- 1. Mostrar todos los planetas.
SELECT * FROM planetas;
-- 2. Mostrar todos los satélites.
SELECT * FROM satelites;
-- 3. Mostrar el nombre de los planetas ordenados por su distancia al Sol.
SELECT nombre
FROM planetas
ORDER BY distancia;
-- 4. Mostrar nombre y diámetro de los planetas ordenados en descendente por su diámetro.
SELECT nombre, diametro
FROM planetas
ORDER BY diametro DESC;
-- 5. Mostrar el nombre de los satélites de Júpiter.
SELECT nombre
FROM satelites
WHERE planeta_id = 5;
-- 6. Mostrar el nombre y el planeta_id de los satélites de Júpiter y Saturno.
SELECT nombre, planeta_id
FROM satelites
WHERE planeta_id = 5 OR planeta_id = 6;

SELECT nombre, planeta_id
FROM satelites
WHERE planeta_id IN (5, 6);

SELECT nombre, planeta_id
FROM satelites
WHERE '56' LIKE CONCAT('%', planeta_id, '%');

-- 7. Mostrar el nombre los satélites cuyo nombre contiene alguna "i".
SELECT nombre
FROM satelites
WHERE nombre LIKE '%i%';

-- 8. Mostrar el nombre y diámetro de los satélites que empiezan por "T".
SELECT nombre, diametro
FROM satelites
WHERE nombre LIKE 't%';

-- 9. Mostrar el nombre y diámetro de todos los satélites ordenados en descendente por su diámetro.
SELECT nombre, diametro
FROM satelites
ORDER BY diametro DESC;

-- 10. Mostrar los planetas que tienen entre 10000 y 15000 kilómetros de diámetro.
SELECT *
FROM planetas
WHERE diametro >= 10000 AND diametro <= 15000;

SELECT *
FROM planetas
WHERE diametro BETWEEN 10000 AND 15000;

-- 11. Mostrar el nombre de los satélites que no empiezan por "T".
SELECT nombre
FROM satelites
WHERE nombre NOT LIKE 'T%';

-- 12. Mostrar el nombre de los 3 planetas más cercanos al Sol.
SELECT nombre
FROM planetas
ORDER BY distancia
LIMIT 0, 3;

-- 13. Mostrar el nombre de los 3 planetas más grandes.
SELECT nombre
FROM planetas
ORDER BY diametro DESC
LIMIT 0, 3;

-- 14. Mostrar el nombre de los satélites que no sean ni de La Tierra, ni de Marte.
SELECT nombre
FROM satelites
WHERE planeta_id NOT IN (3, 4);

SELECT nombre
FROM satelites
WHERE planeta_id <> 3 AND planeta_id <> 4;

-- 15. Mostrar el nombre y el diámetro de los satélites cuyo nombre acaba por "A".
SELECT nombre, diametro
FROM satelites
WHERE nombre LIKE '%A';

-- 16. Mostrar el nombre y diámetro de los satélites de Saturno ordenados en descendente por su diámetro.
SELECT nombre, diametro
FROM satelites
WHERE planeta_id = 6
ORDER BY diametro DESC;

-- 17. Mostrar el nombre y la distancia al Sol en UA (Unidades Astronómicas) de todos los planetas.
SELECT nombre, distancia/146 AS UA
FROM planetas;

-- 18. Mostrar el nombre y el diámetro respecto a la Tierra de todos los planetas.
SELECT nombre, diametro/12756 AS ratio
FROM planetas;

-- 19. Mostrar el nombre y el volumen en millones de km cúbicos de todos los planetas.
SELECT nombre, 4/3*PI()*POW(diametro/2, 3)/1000000 AS "millones de km cúbicos"
FROM planetas;

-- 20. Mostrar el nombre y el número de satélites de cada planeta.
--    satelites(planeta_id) --> planetas(id)
SELECT planetas.nombre, COUNT(satelites.id) AS num_satelites
FROM planetas LEFT JOIN satelites ON planeta_id = planetas.id
GROUP BY 1;
