Condicionales en SQL
====================

  - La función IF
  - CASE ... WHEN ... THEN ... ELSE ... END
  - [Comparison Functions and Operators](https://dev.mysql.com/doc/refman/5.7/en/comparison-operators.html#function_coalesce)

## Función IF

IF(condición, valor_si_true, valor_si_false)

    SELECT
      pais,
      extension,
      IF(extension>500000, 'grande', 'pequeño') AS tamaño
    FROM paises;

## CASE ... WHEN

Como encadenar una serie de IF, ELSEIF, ELSEIF, ...

    SELECT pais, extension,
      CASE
        WHEN extension IS NULL   THEN 'faltan datos'
        WHEN extension > 1000000 THEN 'muy grande'
        WHEN extension > 500000  THEN 'grande'
        WHEN extension > 20000   THEN 'mediano'
        ELSE 'pequeño'
      END AS tamaño
    FROM paises;

Como un switch    

    SELECT pais,
      CASE continente_id
        WHEN 1 THEN 'africano'
        WHEN 2 THEN 'americano'
        WHEN 3 THEN 'asiático'
        WHEN 4 THEN 'europeo'
        WHEN 5 THEN 'oceánico'
        ELSE 'no se'
      END AS gentilicio
    FROM paises
    ORDER BY 1;

## Ejercicios

  1. Cada país tiene unos kilómetros de costa. Mostrar si no se ha especificado la costa 'faltan datos', si la costa es 0 mostrar 'interior' y si sí tiene costa mostrar 'costero'.

  2. Cada país tiene un campo con el nombre del país en inglés. Con un IF mostrar 'igual' si el nombre en español es igual que en inglés y 'diferente' sino es así.

  3. Mostrar una consulta con 4 columnas. La primera columna es el continente y las otras 3 son relativos a la población y se titulan:
  "entre 0 y 20 millones", "entre 20 y 40 millones", "más de 40 millones". La consulta ha de mostrar 5 filas, una por continente. Los datos a mostrar es el número de países.


  | continente | >=0 y <20 | >=20 y < 40 | >= 40 |
  |------------|-----------|-------------|-------|
  | África     |           |             |       |
  | América    |           |             |       |
  | Asia       |           |             |       |
  | Europa     |           |             |       |
  | Oceanía    |           |             |       |
