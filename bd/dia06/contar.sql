/*
  COUNT() es una función utilizada en agrupaciones

  COUNT(*) = Contar el número de filas
  COUNT(campo) = Contar el número de veces que aparece
                 el campo con valores no nulos.
  COUNT(DISTINCT campo) = Contar el número de valores
                 distintos que tiene el campo.
*/
USE bd_astros;

SELECT * FROM planetas; -- Salen toda la tabla planetas

SELECT COUNT(*) FROM planetas; -- Sale 8
SELECT COUNT(*) FROM satelites; -- Sale 17

SELECT COUNT(*) AS cuenta -- Con alias
FROM satelites;

SELECT COUNT(DISTINCT planeta_id)
FROM satelites; -- Sale 6

USE bd_relaciones;

-- Cuenta el número de mascotas
SELECT COUNT(*) FROM mascotas; -- 5

-- Cuenta el número de mascotas con dueño
SELECT COUNT(persona_id) FROM mascotas; -- 4

-- Cuenta el número de mascotas sin dueño
SELECT COUNT(*) - COUNT(persona_id) FROM mascotas; -- 1

-- Cuenta el número de dueños distintos que hay
SELECT COUNT(DISTINCT persona_id) FROM mascotas; -- 3


--
