/*
  Agrupamientos en SQL
  Se utilizan funciones de agrupamiento
  y también se puede utilizar algún otro campo.

  Obtenemos un resumen en base a algún campo
  que tenga repeticiones.

  SELECT    campos o fórmulas a visualizar
  FROM      las tablas y cómo se relacionan éstas
  WHERE     filtros 
  GROUP BY  agrupar por campos con valores repetidos
  HAVING    filtros con funciones de agrupamiento
  ORDER BY  ordenar
  LIMIT     limita el número de filas que aparecen
*/

USE bd_astros;

-- El número de satélites y la suma de diámetro
--  de cada planeta. Da 6 filas.
SELECT planeta_id, COUNT(*), SUM(diametro)
FROM satelites
GROUP BY planeta_id;

-- Totales de Júpiter y Saturno. Da 2 filas.
SELECT planeta_id, COUNT(*), SUM(diametro)
FROM satelites
WHERE planeta_id IN (5, 6)
GROUP BY planeta_id;

-- Totales de los planetas que tienen más de 2 satélites
--  Da 3 filas
SELECT planeta_id, COUNT(*), SUM(diametro)
FROM satelites
GROUP BY planeta_id
HAVING COUNT(*) > 2;
