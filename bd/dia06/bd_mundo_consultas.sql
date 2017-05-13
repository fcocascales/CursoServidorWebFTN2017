-- bd_mundo_consultas.sql

-- 1. Muestra el nombre del país y del continente de todos los países
--    Da 201 = Número relaciones = Nº veces que continente_id no es nulo

  SELECT p.pais, c.continente
  FROM paises p
    INNER JOIN continentes c ON p.continente_id = c.id
  ORDER BY p.pais;

-- 2. Muestra todos los países que tienen el campo posicion (no es nulo)
--    Da 93 filas

  SELECT pais, posicion
  FROM paises
  WHERE posicion IS NOT NULL; -- NOT posicion IS NULL

-- 3. Muestra el nombre del país y el gobierno de todos los países.
--    Da 199 filas

  SELECT p.pais, g.gobierno
  FROM paises p
    INNER JOIN gobiernos g ON p.gobierno_id = g.id
  ORDER BY p.pais;

  SELECT pais, gobierno
  FROM paises
    INNER JOIN gobiernos ON gobierno_id = gobiernos.id
  ORDER BY pais;

-- 4. Muestra el nombre del país, su capital y la moneda de todos los países.
---   Da 202 filas

  SELECT pais, capital, moneda
  FROM paises
  ORDER BY pais;

-- 5. Haz el total de población y extensión de todos los países.
--    Da 1 fila

  SELECT SUM(poblacion) AS "poblacion mundial",
         SUM(extension) AS "extension mundial"
  FROM paises;

-- 6. Calcula el número de países y el promedio de población y de extensión.
--    Da 1 fila

  SELECT COUNT(*), AVG(poblacion), AVG(extension)
  FROM paises;

-- 7. Muestra el total de población agrupado por continente.
--    Da 6 filas

  SELECT continente, SUM(poblacion)
  FROM continentes
    INNER JOIN paises ON continentes.id = continente_id
  GROUP BY continente
  ORDER BY continente;

-- 8. Muestra la cuenta de países y el total de extension agrupado por gobierno.
--    Da 37 filas

  SELECT gobierno, COUNT(*), SUM(extension)
  FROM gobiernos
    INNER JOIN paises ON gobiernos.id = gobierno_id
  GROUP BY gobierno
  ORDER BY gobierno;

  SELECT g.gobierno, COUNT(*), SUM(p.extension)
  FROM gobiernos g
    INNER JOIN paises p ON g.id = p.gobierno_id
  GROUP BY 1
  ORDER BY 1;

-- 9. Muestra el total de población agrupado por continente y gobierno.
--    Da 69 filas

  SELECT c.continente, g.gobierno, SUM(p.poblacion)
  FROM paises p
    INNER JOIN continentes c ON p.continente_id = c.id
    INNER JOIN gobiernos g ON p.gobierno_id = g.id
  GROUP BY 1, 2
  ORDER BY 1, 2;

-- 10. Muestra el número de países y el total de población agrupado por la primera letra del país.
--     Da 24 filas

  SELECT LEFT(pais, 1), COUNT(*), SUM(poblacion)
  FROM paises
  GROUP BY 1
  ORDER BY 1;

--  11. Muestra los idiomas hablados en cada país.
--      Da 462

  SELECT p.pais, i.idioma
  FROM paises p
    INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
    INNER JOIN idiomas i ON pi.idioma_id = i.id
  ORDER BY 1, 2;

  SELECT p.pais, i.idioma
  FROM paises p, pais_idiomas pi, idiomas i
  WHERE p.id = pi.pais_id
    AND pi.idioma_id = i.id
  ORDER BY 1, 2;

  -- Da 198 filas
  SELECT p.pais, GROUP_CONCAT(i.idioma SEPARATOR ', ') AS idiomas
  FROM paises p
    INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
    INNER JOIN idiomas i ON pi.idioma_id = i.id
  GROUP BY 1
  ORDER BY 1;

--  12. Muestra los países fronterizos de cada país.
--      Da 601

  SELECT p.pais, v.pais AS vecino
  FROM paises p
    INNER JOIN pais_vecinos pv ON p.id = pv.pais_id
    INNER JOIN paises v ON pv.vecino_id = v.id
  ORDER BY 1, 2;

  -- Da 152
  SELECT p.pais, GROUP_CONCAT(v.pais ORDER BY v.pais SEPARATOR '; ') AS vecinos
  FROM paises p
    INNER JOIN pais_vecinos pv ON p.id = pv.pais_id
    INNER JOIN paises v ON pv.vecino_id = v.id
  GROUP BY 1
  ORDER BY 1;

--  13. Muestra el número de idiomas hablados en cada país.
--      Da

  SELECT p.pais, COUNT(*)
  FROM paises p
    INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
  GROUP BY 1
  ORDER BY 1;

--  14. Muestra los idiomas hablados en cada país de África.
--      Da 174

  SELECT p.pais, i.idioma
  FROM paises p
    INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
    INNER JOIN idiomas i ON pi.idioma_id = i.id
    INNER JOIN continentes c ON p.continente_id = c.id
  WHERE c.continente = 'africa'
  ORDER BY 1, 2;

  -- Da 54
  SELECT p.pais, GROUP_CONCAT(i.idioma) AS idiomas
  FROM paises p
    INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
    INNER JOIN idiomas i ON pi.idioma_id = i.id
    INNER JOIN continentes c ON p.continente_id = c.id
  WHERE c.continente = 'africa'
  GROUP BY 1
  ORDER BY 1;

--  15. Muestra los países del mundo donde se hablan al menos 4 idiomas.
--      Da 37

  SELECT p.pais, COUNT(*) AS num_idiomas
  FROM paises p
    INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
  GROUP BY 1
  HAVING COUNT(*) >= 4
  ORDER BY 2, 1;

--  16. Muestra una lista de idiomas y el número de países que lo hablan.
--      Da 185

  SELECT i.idioma, COUNT(*) AS num_paises
  FROM idiomas i
    INNER JOIN pais_idiomas pi ON i.id = pi.idioma_id
  GROUP BY 1
  ORDER BY 2 DESC, 1;

--  17. Muestra el número de idiomas hablado en cada continente.
--      Da 5

  SELECT c.continente, COUNT(DISTINCT pi.idioma_id) AS num_idiomas
  FROM continentes c
    INNER JOIN paises p ON c.id = p.continente_id
    INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
  GROUP BY 1
  ORDER BY 1;

--  18. Muestra los países donde se habla catalán.
--      Da 3

  SELECT p.pais
  FROM paises p
    INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
    INNER JOIN idiomas i ON pi.idioma_id = i.id
  WHERE i.idioma = 'catalan';

--  19. Muestra los países donde se habla francés o alemán.
--      Da 50

  SELECT p.pais, i.idioma
  FROM paises p
    INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
    INNER JOIN idiomas i ON pi.idioma_id = i.id
  WHERE i.idioma IN ('frances', 'aleman')
  ORDER BY 1, 2;

--  20. Muestra los idiomas de los 5 países más grandes.
--      Da

  SELECT pais, extension
  FROM paises
  ORDER BY 2 DESC
  LIMIT 5;
  -- Da 7
  SELECT p.pais, p.extension, i.idioma
  FROM paises p
    INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
    INNER JOIN idiomas i ON pi.idioma_id = i.id
  WHERE p.extension >= 8000000
  ORDER BY 2, 1;

  -- Da 5
  SELECT p.pais, p.extension, GROUP_CONCAT(i.idioma)
  FROM paises p
    INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
    INNER JOIN idiomas i ON pi.idioma_id = i.id
  GROUP BY p.id
  ORDER BY p.extension DESC
  LIMIT 5;

  -- Subconsultas
  SELECT p.pais, p.extension, i.idioma
  FROM paises p
    INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
    INNER JOIN idiomas i ON pi.idioma_id = i.id
  WHERE p.extension >=
    (SELECT extension
    FROM paises
    ORDER BY 1 DESC
    LIMIT 4, 1)
  ORDER BY 1;
