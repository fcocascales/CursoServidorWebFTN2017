SELECT producto, precio_unidad
FROM productos
WHERE producto LIKE '%cerveza%'
   OR producto LIKE '%queso%';

SELECT producto, precio_unidad,
   producto LIKE '%cerveza%',
   producto LIKE '%queso%',
   producto LIKE '%cerveza%' OR producto LIKE '%queso%'
FROM productos;
