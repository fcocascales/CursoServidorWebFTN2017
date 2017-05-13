-- 1. Muestra el tratamiento, el nombre y los apellidos de los empleados unidos con la función CONCAT.

    -- Todos los campos
    SELECT *
    FROM empleados;

    -- 4 columnas
    SELECT id, tratamiento, nombre, apellidos
    FROM empleados;

    -- 2 columnas: campo y fórmula
    SELECT id, CONCAT(tratamiento, nombre, apellidos)
    FROM empleados;

    -- 1 columna (solución)
    SELECT CONCAT(tratamiento, ' ', nombre, ' ', apellidos) AS empleado
    FROM empleados;

    -- 1 columna (solución)
    SELECT CONCAT_WS(' ', tratamiento, nombre, apellidos) AS empleado
    FROM empleados;


-- 2. Muestra la siguiente concatenación en la tabla empleados: "El cumpleaños de Nancy es el 8 del mes 12".

    -- Cómo obtener el nombre del mes en español
    SET lc_time_names = 'es_MX';
    SELECT nombre, fecha_nacimiento, DAY(fecha_nacimiento), MONTH(fecha_nacimiento), MONTHNAME(fecha_nacimiento)
    FROM empleados;

    -- Solución con CONCAT
    SELECT CONCAT('El cumpleaños de ', nombre, ' es el ', DAY(fecha_nacimiento), ' del mes ', MONTH(fecha_nacimiento)) AS frase
    FROM empleados;

    -- Solución con CONCAT_WS
    SELECT CONCAT_WS(' ', 'El cumpleaños de', nombre, 'es el', DAY(fecha_nacimiento), 'del mes', MONTH(fecha_nacimiento)) AS frase
    FROM empleados;

    -- Solución mostrando el nombre del mes en español
    SET lc_time_names = 'es_ES';
    SELECT CONCAT('El cumpleaños de ', nombre, ' es el ', DAY(fecha_nacimiento), ' de ', MONTHNAME(fecha_nacimiento)) AS frase
    FROM empleados;

    -- Usar una hipotética tabla meses para mostrar los meses en español
    SELECT CONCAT('El cumpleaños de ', nombre, ' es el ', DAY(fecha_nacimiento), ' de ', meses.nombre) AS frase
    FROM empleados
      INNER JOIN meses ON MONTH(fecha_nacimiento) = meses.id;


-- 3. Muestra el nombre del producto, su precio, el IVA del precio, y el precio más el IVA. El IVA es 21%.

    -- Solución
    SELECT producto, precio_unidad,
      precio_unidad*0.21 AS iva,
      precio_unidad*1.21 AS pvp
    FROM productos;

    -- Redondear a 2 decimales
    SELECT producto,
      ROUND(precio_unidad, 2) AS precio,
      ROUND(precio_unidad*0.21, 2) AS iva,
      ROUND(precio_unidad*1.21, 2) AS pvp
    FROM productos;

    -- Extraer el tipo de IVA de una hipotética tabla de opciones de una sóla fila
    SELECT producto, precio_unidad,
      opciones.iva,
      precio_unidad*opciones.iva AS precio_iva,
      precio_unidad*(1+opciones.iva) AS precio_final
    FROM productos
      CROSS JOIN (SELECT 0.21 AS iva) opciones;


-- 4. Muestra el total de cada línea de detalle. Utiliza los campos precio_unidad, cantidad y descuento para realizar el cálculo.

    -- Fórmula abreviada
    SELECT *, precio_unidad * cantidad * (1 - descuento) AS importe
    FROM detalles;

    -- Fórmula sin sacar factor común
    SELECT *, precio_unidad*cantidad - precio_unidad*cantidad*descuento AS importe
    FROM detalles;


-- 5. Muestra de cada pedido los días que han pasado entre la fecha del pedido y la fecha de entrega.

    -- La función DATEDIFF calcula el número de días transcurridos entre dos fechas
    SELECT id, fecha_pedido, fecha_entrega,
      DATEDIFF(fecha_entrega, fecha_pedido) AS dias_demora
    FROM pedidos;


-- 6. Muestra las categorías y el número de productos de cada categoría.

    -- Consulta previa que muestra todas las filas sin agrupar
    SELECT categoria, producto
    FROM categorias
      INNER JOIN productos ON categorias.id = categoria_id
    ORDER BY categoria;

    -- Solución
    SELECT categoria, COUNT(*) AS cuenta
    FROM categorias
      INNER JOIN productos ON categorias.id = categoria_id
    GROUP BY categoria
    ORDER BY categoria;

    -- Se puede agrupar por cualquier campo de categorias que sea clave única
    SELECT categoria, COUNT(productos.id) AS cuenta
    FROM categorias
      INNER JOIN productos ON categorias.id = categoria_id
    GROUP BY categorias.id
    ORDER BY 2;

    -- La función GROUP_CONCAT muestra todos los nombres de productos concatenados
    SELECT categorias.id, categoria,
      GROUP_CONCAT(producto) AS productos,
      COUNT(*) AS cuenta
    FROM categorias
      INNER JOIN productos ON categorias.id = categoria_id
    GROUP BY 1
    ORDER BY 1;


-- 7. Muestra los clientes y el número de pedidos de cada cliente.

    -- Se pueden poner todos los campos de clientes que se quiera
    SELECT clientes.id, empresa, contacto, COUNT(*) AS numero_pedidos
    FROM clientes
      INNER JOIN pedidos ON clientes.id = cliente_id
    GROUP BY 1
    ORDER BY 4 DESC;

    -- Uso de la función de agrupamiento GROUP_CONCAT para mostrar todos los pedidos
    SELECT clientes.id, empresa, contacto,
      GROUP_CONCAT(pedidos.id) AS pedidos,
      COUNT(*) AS numero_pedidos
    FROM clientes
      INNER JOIN pedidos ON clientes.id = cliente_id
    GROUP BY 1
    ORDER BY 2;


-- 8. Muestra el número de pedidos agrupado por empleado y mes del pedido.

    -- Para agrupar por meses nos hace falta también el año
    SELECT fecha_pedido,
      SUBSTR(fecha_pedido, 1, 7),
      YEAR(fecha_pedido), MONTH(fecha_pedido)
    FROM pedidos;

    -- Solución ordenando primero por empleado
    SELECT nombre AS empleado,
      YEAR(fecha_pedido) AS año,
      MONTH(fecha_pedido) AS mes,
      COUNT(*) AS numero_pedidos
    FROM empleados
      INNER JOIN pedidos ON empleados.id = empleado_id
    GROUP BY 1, 2, 3
    ORDER BY 1, 2, 3;

    -- Solución ordenando primero por mes
    SELECT YEAR(fecha_pedido) AS año,
      MONTH(fecha_pedido) AS mes,
      nombre AS empleado,
      COUNT(*) AS numero_pedidos
    FROM empleados
      INNER JOIN pedidos ON empleados.id = empleado_id
    GROUP BY 1, 2, 3
    ORDER BY 1, 2, 3;

    -- Uso de WITH ROLLUP (no usar ORDER BY) para obtener subtotales de todos los agrupamientos
    SELECT nombre AS empleado,
      YEAR(fecha_pedido) AS año,
      MONTH(fecha_pedido) AS mes,
      COUNT(*) AS numero_pedidos
    FROM empleados
      INNER JOIN pedidos ON empleados.id = empleado_id
    GROUP BY 1, 2, 3 WITH ROLLUP;


-- 9. Muestra la suma de los importes del detalle por cada pedido.

    -- Solución
    SELECT pedidos.id, fecha_pedido,
      SUM(cantidad*precio_unidad*(1-descuento)) AS total
    FROM pedidos
      INNER JOIN detalles ON pedidos.id = pedido_id
    GROUP BY 1;

    -- Añadir el número de detalles de cada pedido
    SELECT pedidos.id, fecha_pedido,
      SUM(cantidad*precio_unidad*(1-descuento)) AS total,
      COUNT(*) AS num_detalles
    FROM pedidos
      INNER JOIN detalles ON pedidos.id = pedido_id
    GROUP BY 1;


-- 10. Muestra el total del pedido, el cargo, el total más el cargo de cada pedido.

    -- El cargo sea ha de sumar fuera de la función SUM para que no lo sume por cada línea de detalle
    SELECT pedidos.id, fecha_pedido, cargo,
      SUM(cantidad*precio_unidad*(1-descuento)) AS total,
      SUM(cantidad*precio_unidad*(1-descuento)) + cargo AS total_con_cargo
    FROM pedidos
      INNER JOIN detalles ON pedidos.id = pedido_id
    GROUP BY 1;


-- 11. Importe de los pedidos agrupado por cliente y mes

    -- Usando WITH ROLLUP tendremos los subtotales por cliente, año y mes
    SELECT empresa,
      YEAR(fecha_pedido) AS año,
      MONTH(fecha_pedido) AS mes,
      SUM(cantidad*precio_unidad*(1-descuento)) + cargo AS total
    FROM pedidos
      INNER JOIN detalles ON pedidos.id = pedido_id
      INNER JOIN clientes ON clientes.id = cliente_id
    GROUP BY 1, 2, 3 WITH ROLLUP;
    /*
      Si no funciona es porque está puesto:
        SET sql_mode = 'ONLY_FULL_GROUP_BY';
      para quitarlo hay que hacer:
        SET sql_mode = '';
    */
