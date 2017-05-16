Paginación 2
============

## Resumen de ayer

Obtener una página en SQL:
 - `SELECT * FROM tabla LIMIT desplazamiento, resultados_por_pagina`

Total de páginas en SQL:
 - `SELECT CEIL(COUNT(*)/resultados_por_pagina) FROM tabla`

## Engorro

Al filtrar los datos usando WHERE hay que repetir la misma condición tanto en la consulta de obtener página como en la consulta del total de páginas.

Ejemplo:
 - `SELECT * FROM clientes WHERE pais='alemania' LIMIT 0, 10`
 - `SELECT CEIL(COUNT(*)/10) FROM clientes WHERE pais='alemania'`

## Método definitivo para realizar consultas de paginación en MySQL

Utilizar el modificador del SELECT **SQL_CALC_FOUND_ROWS** y luego la función **FOUND_ROWS()**.

Ejemplo:
 - `SELECT SQL_CALC_FOUND_ROWS * FROM clientes WHERE pais='alemania' LIMIT 0, 10`
 - `SELECT FOUND_ROWS()`

La función `FOUND_ROWS()` retorna el número de filas que daría el `SELECT SQL_CALC_FOUND_ROWS` anterior si no tuviese la clausula LIMIT.

Enlaces:
 - [found_rows()](https://dev.mysql.com/doc/refman/5.7/en/information-functions.html#function_found-rows)
