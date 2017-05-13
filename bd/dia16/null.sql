USE bd_neptuno;

-- 91 filas
SELECT COUNT(*)
FROM clientes;

-- 6 filas
SELECT empresa, region
FROM clientes
WHERE region = 'sp';

-- 6 filas
SELECT empresa, region
FROM clientes
WHERE region <=> 'sp';

-- 0 filas (MAL HECHO)
SELECT empresa, region
FROM clientes
WHERE region = null;

SELECT empresa, region
FROM clientes
WHERE null;

SELECT empresa, region
FROM clientes
WHERE false;

-- 60 filas
SELECT empresa, region
FROM clientes
WHERE region <=> null;

-- 60 filas
SELECT empresa, region
FROM clientes
WHERE region is null;

-- 60 filas
SELECT empresa, region
FROM clientes
WHERE COALESCE(region,'') = '';

-- 60 filas
SELECT empresa, region
FROM clientes
WHERE COALESCE(region,'zz') = 'zz';

-- 66 filas
SELECT empresa, region
FROM clientes
WHERE COALESCE(region,'sp') = 'sp';

SELECT empresa, region, COALESCE(region,'zz'), IF(region IS NULL, 'zz', region)
FROM clientes;

-- 66 filas = 60 null + 6 sp
SELECT empresa, region
FROM clientes
WHERE NULLIF(region,'sp') is null;

-- 66 filas
SELECT empresa, region
FROM clientes
WHERE region is null
  OR region = 'sp';

SELECT empresa, region, NULLIF(region,'sp')
FROM clientes;

-- 31 filas
SELECT empresa, region
FROM clientes
WHERE region is not null;
