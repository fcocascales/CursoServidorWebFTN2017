USE bd_neptuno;

-- 1. Mostrar los clientes de Alemania

    SELECT *
    FROM clientes
    WHERE pais = 'alemania';


-- 2. Mostrar los clientes de Alemania y Francia

    -- Uso de IN
    SELECT *
    FROM clientes
    WHERE pais IN ('alemania', 'francia');

    -- Uso de comparadores
    SELECT *
    FROM clientes
    WHERE pais = 'alemania' OR pais = 'francia';


-- 3. Mostrar los clientes cuya empresa empiezan por la letra B

    SELECT id, codigo, empresa, contacto, pais
    FROM clientes
    WHERE empresa LIKE 'b%'
    ORDER BY empresa;


-- 4. Productos que cuestan entre 20 y 30 euros

    -- Uso de BETWEEN
    SELECT *
    FROM productos
    WHERE precio_unidad BETWEEN 20 AND 30;

    -- Uso de comparadores
    SELECT *
    FROM productos
    WHERE precio_unidad >= 20 AND precio_unidad <= 30;


-- 5. Productos de la categoría "Pescado/Marisco"

    -- Uso de alias para las tablas
    SELECT p.id, p.producto, c.categoria, p.precio_unidad
    FROM productos p
      INNER JOIN categorias c ON p.categoria_id = c.id
    WHERE c.categoria = 'pescado/marisco'
    ORDER BY p.producto;

    -- Sin alias de tablas
    SELECT productos.id, producto, categoria, precio_unidad
    FROM productos
      INNER JOIN categorias ON categoria_id = categorias.id
    WHERE categoria = 'pescado/marisco'
    ORDER BY producto;


-- 6. Clientes que no tienen fax

    -- Uso de IS NULL
    SELECT id, codigo, empresa, contacto, pais, fax
    FROM clientes
    WHERE fax IS NULL
    ORDER BY codigo;


-- 7. Pedidos realizados en julio de 1996 a Brasil

    -- Uso de LIKE
    SELECT id, fecha_pedido, pais_destinatario
    FROM pedidos
    WHERE pais_destinatario = 'brasil'
      AND fecha_pedido LIKE '1996-07-%'
    ORDER BY 2;

    -- Uso de BETWEEN
    SELECT id, fecha_pedido, pais_destinatario
    FROM pedidos
    WHERE pais_destinatario = 'brasil'
      AND fecha_pedido BETWEEN '1996-07-01' AND '1996-07-31'
    ORDER BY 2;

    -- Uso de las funciones YEAR y MONTH
    SELECT id, fecha_pedido, pais_destinatario
    FROM pedidos
    WHERE pais_destinatario = 'brasil'
      AND YEAR(fecha_pedido) = 1996
      AND MONTH(fecha_pedido) = 7
    ORDER BY 2;


-- 8. Pedidos realizados por la empleada Nancy en mayo de 1998

    SELECT pedidos.id, fecha_pedido, empleado_id, nombre
    FROM pedidos
      INNER JOIN empleados ON empleado_id = empleados.id
    WHERE nombre = 'nancy'
      AND fecha_pedido LIKE '1998-05-%';


-- 9. Productos del proveedor 'Tokyo Traders' que cuestan menos de 50 euros.

    SELECT productos.id, producto, precio_unidad, empresa
    FROM productos
      INNER JOIN proveedores ON proveedor_id = proveedores.id
    WHERE empresa = 'tokyo traders'
      AND precio_unidad < 50
    ORDER BY 2;


-- 10. Pedidos a clientes de Alemania por la compañía de envío 'Speedy Express'.

    -- Uso de INNER JOIN
    SELECT p.id, p.fecha_pedido, c.pais,
      c.empresa AS cliente, e.empresa AS envio
    FROM pedidos p
      INNER JOIN clientes c ON p.cliente_id = c.id
      INNER JOIN envios e ON p.envio_id = e.id
    WHERE c.pais = 'alemania'
      AND e.empresa = 'speedy express'
    ORDER BY 1;

    -- Uso de producto cartesiano y más WHERE
    SELECT p.id, p.fecha_pedido, c.pais,
      c.empresa AS cliente, e.empresa AS envio
    FROM pedidos p, clientes c, envios e
    WHERE p.cliente_id = c.id
      AND p.envio_id = e.id
      AND c.pais = 'alemania'
      AND e.empresa = 'speedy express'
    ORDER BY 1;
