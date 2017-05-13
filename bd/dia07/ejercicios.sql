/* 1. Cada país tiene unos kilómetros de costa. Mostrar si no se ha especificado la costa 'faltan datos', si la costa es 0 mostrar 'interior' y si sí tiene costa mostrar 'costero'. */

SELECT pais, costa,
  CASE
    WHEN costa IS NULL THEN 'faltan datos'
    WHEN costa = 0 THEN 'interior'
    ELSE 'costero'
  END AS tipo
FROM paises
ORDER BY pais;

SELECT pais, costa,
  IF(costa IS NULL, 'faltan datos',
    IF(costa = 0, 'interior', 'costero')
  ) AS tipo
FROM paises
ORDER BY pais;

SELECT pais, costa,
  CASE COALESCE(costa, -1) -- Convertir el NULL en -1
    WHEN -1 THEN 'faltan datos'
    WHEN 0 THEN 'interior'
    ELSE 'costero'
  END AS tipo
FROM paises
ORDER BY pais;

/* 2. Cada país tiene un campo con el nombre del país en inglés. Con un IF mostrar 'igual' si el nombre en español es igual que en inglés y 'diferente' sino es así. */

SELECT pais, country,
  IF(pais = country, 'igual', 'diferente') AS compara
FROM paises
ORDER BY pais;

SELECT pais, country,
  CASE
    WHEN pais = country THEN 'igual'
    ELSE 'diferente'
  END AS compara
FROM paises
ORDER BY pais;

/* 3. Mostrar una consulta con 4 columnas. La primera columna es el continente y las otras 3 son relativos a la población y se titulan:
"entre 0 y 20 millones", "entre 20 y 40 millones", "más de 40 millones". La consulta ha de mostrar 5 filas, una por continente. Los datos a mostrar es el número de países. */

SELECT continente_id,  pais, poblacion,
  IF(poblacion < 2e7, 1, 0) AS a,
  IF(poblacion >= 2e7 AND poblacion < 4e7, 1, 0) AS b,
  IF(poblacion >= 4e7, 1, 0) AS c
FROM paises;

SELECT continente_id, SUM(a), SUM(b), SUM(c)
FROM
  (SELECT continente_id,  pais, poblacion,
    IF(poblacion < 2e7, 1, 0) AS a,
    IF(poblacion >= 2e7 AND poblacion < 4e7, 1, 0) AS b,
    IF(poblacion >= 4e7, 1, 0) AS c
  FROM paises) aa
GROUP BY continente_id;

SELECT continente,
  SUM(a) AS "< 20M",
  SUM(b) AS ">= 20M y < 40M",
  SUM(c) AS ">= 40M"
FROM
  (SELECT c.continente,
    IF(p.poblacion < 2e7, 1, 0) AS a,
    IF(p.poblacion >= 2e7 AND poblacion < 4e7, 1, 0) AS b,
    IF(p.poblacion >= 4e7, 1, 0) AS c
  FROM paises p
    INNER JOIN continentes c ON p.continente_id = c.id
  WHERE c.id BETWEEN 1 AND 5) aa
GROUP BY 1
ORDER BY 1;

-- Versión definitiva con una sóla consulta
SELECT continente,
  SUM(IF(p.poblacion < 2e7, 1, 0)) AS "< 20M",
  SUM(IF(p.poblacion >= 2e7 AND poblacion < 4e7, 1, 0)) AS ">= 20M y < 40M",
  SUM(IF(p.poblacion >= 4e7, 1, 0)) AS ">= 40M"
FROM paises p
  INNER JOIN continentes c ON p.continente_id = c.id
WHERE c.id BETWEEN 1 AND 5
GROUP BY 1
ORDER BY 1;
