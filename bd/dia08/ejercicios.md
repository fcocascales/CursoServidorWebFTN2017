Ejercicios
==========

Probar las sentencias SQL en el phpMyAdmin antes de usarlas en las páginas PHP.

1. Crea la página "consulta_europa.php" donde se muestre el país, la capital y la población de los países de Europa ordenados alfabéticamente.

```sql
    SELECT pais, capital, poblacion
    FROM paises
    WHERE continente_id = 4
    ORDER BY pais
```    

2. Crea la página "consulta_dolar.php" donde se muestre el país y la moneda de los países cuya moneda contenga la palabra 'dolar'.

```sql
      SELECT pais, moneda
      FROM paises
      WHERE moneda LIKE '%dolar%'
      ORDER BY 1;
```

3. Crea la página "consulta_america.php" donde se muestre el país y el número de idiomas de los países de América. Ordénalo por número de idiomas en descendente y luego por nombre del país.

```sql
      SELECT p.pais, COUNT(*) AS num_idiomas
      FROM paises p
        INNER JOIN pais_idiomas pi ON p.id = pi.pais_id
      WHERE p.continente_id = 2
      GROUP BY 1
      ORDER BY 2 DESC, 1;
```    
