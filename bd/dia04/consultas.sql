-- consultas.sql
-- SELECT

SELECT 'Hola Mundo';

SELECT 'Hola Mundo' AS saludo;

SELECT * FROM planetas;

SELECT * FROM satelites;

SELECT id, nombre FROM planetas;

SELECT nombre, distancia FROM planetas;

-- Mostrar el nombre y la distancia de los planetas
-- ordenado alfabéticamente por el nombre
SELECT nombre, distancia  -- Campos
FROM planetas             -- Tabla
ORDER BY nombre;          -- Ordenación

-- Por orden descendente de distancia
SELECT nombre, distancia
FROM planetas
ORDER BY distancia DESC;

-- Planetas más cercanos al Sol,
--  a menos de 300.000.000 de km.
SELECT *
FROM planetas
WHERE distancia < 300;

-- Planetas más grandes que la Tierra
--  a más de 13.000 km.
SELECT *
FROM planetas
WHERE diametro > 13000
ORDER BY nombre;

SELECT *
FROM planetas
WHERE nombre = 'marte'
  OR nombre = 'VENUS';

SELECT *
FROM planetas
WHERE id = 1
  OR id = 8;

-- Mostraría todos los planetas menos el 1 y el 8
SELECT *
FROM planetas
WHERE id <> 1
  AND id <> 8;

-- Mostrar los planetas 2, 4, 6 y 8
SELECT *
FROM planetas
WHERE id IN (2, 4, 6, 8);

-- Planetas pares
SELECT *
FROM planetas
WHERE id % 2 = 0;

-- No mostrar los planetas 2, 5, 6, 7 y 8
SELECT *
FROM planetas
WHERE id NOT IN (2, 5, 6, 7, 8);

-- Planetas cuyo nombre contiene alguna i
SELECT *
FROM planetas
WHERE nombre LIKE '%i%';

-- Planetas que empiezan por M
SELECT *
FROM planetas
WHERE nombre LIKE 'M%';

-- Planetas que acaban en O
SELECT *
FROM planetas
WHERE nombre LIKE '%O';

-- El nombre contine una E y luego contiene una I
SELECT *
FROM planetas
WHERE nombre LIKE '%E%I%';

-- La segunda letra del nombre es una E
SELECT *
FROM planetas
WHERE nombre LIKE '_E%';

-- Segunda letra es U y cuarta letra es I
SELECT *
FROM planetas
WHERE nombre LIKE '_U_I%';

-- Cuarta planeta por tamaño
-- LIMIT inicio, cantidad
--    LIMIT 0, 1 --> Júpiter
--    LIMIT 1, 2 --> Saturno y Urano
SELECT *
FROM planetas
ORDER BY diametro DESC
LIMIT 3, 1;











--
