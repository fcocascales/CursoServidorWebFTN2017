/*
  Funciones de agrupamiento:
    La función COUNT() que cuenta
    La función SUM() que suma
    La función AVG() es el promedio (average)
    La función MIN() es el valor más pequeño
    La función MAX() es el valor más grande
*/

USE bd_astros;

SELECT SUM(diametro) FROM planetas; -- 400.687 km
SELECT SUM(diametro) FROM satelites; -- 38.854 km

SELECT SUM(diametro) / COUNT(*) AS promedio
FROM planetas; -- 50.085,8750 km

SELECT AVG(diametro) AS promedio
FROM planetas; -- 50.085,8750 km

-- Datos de los planetas rocosos.
--   Los 4 más cercanos al Sol
SELECT COUNT(*), SUM(diametro), AVG(diametro),
  MIN(diametro), MAX(diametro)
FROM planetas
WHERE distancia < 500;
-- 4 	36.521km 	9.130,25km  4.878km 	12.756km
