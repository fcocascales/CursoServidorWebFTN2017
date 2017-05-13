-- 1. Seleccionar el nombre y el precio de todos los productos en cuyo nombre aparece la palabra 'cerveza' o 'queso'. Ordénalo por el nombre.

  -- Toda la tabla
  SELECT * FROM productos;

  -- Seleccionando campos (o columnas)
  SELECT producto, precio_unidad FROM productos;

  -- No hay ningún que se llame 'cerveza'
  SELECT producto, precio_unidad
  FROM productos
  WHERE producto = 'cerveza';

  -- Productos que contienen la palabra 'cerveza'
  SELECT producto, precio_unidad
  FROM productos
  WHERE producto LIKE '%cerveza%';

  -- Solución
  SELECT producto, precio_unidad
  FROM productos
  WHERE producto LIKE '%cerveza%'
     OR producto LIKE '%queso%'
  ORDER BY producto;


-- 2. Crea una consulta de unión con los campos: empresa, contacto y teléfono. Usa las tablas: clientes y proveedores. Ordénalo por empresa.

  -- Sólo clientes (91 filas)
  SELECT empresa, contacto, telefono
  FROM clientes
  ORDER BY empresa;

  -- Sólo proveedores (29 filas)
  SELECT empresa, contacto, telefono
  FROM proveedores
  ORDER BY empresa;

  -- Solución (120 filas)
  SELECT empresa, contacto, telefono
  FROM clientes
  UNION
  SELECT empresa, contacto, telefono
  FROM proveedores
  ORDER BY empresa;

  -- Indicar si es cliente o proveedor
  SELECT empresa, contacto, telefono, 'CLIENTE' AS tipo
  FROM clientes
  UNION
  SELECT empresa, contacto, telefono, 'PROVEEDOR'
  FROM proveedores
  ORDER BY empresa;

  -- Añadir la tabla empleados (129 filas)
  SELECT empresa, contacto, telefono, 'CLIENTE' AS tipo
  FROM clientes
  UNION
  SELECT empresa, contacto, telefono, 'PROVEEDOR'
  FROM proveedores
  UNION
  SELECT 'Neptuno', CONCAT(nombre,' ',apellidos), telefono_domicilio, 'EMPLEADO'
  FROM empleados
  ORDER BY empresa;


-- 3. Usa la función de concatenación para mostrar la siguiente frase en cada producto: "El producto X es de la categoría Y".

  SELECT * FROM productos;
  SELECT * FROM categorias;

  -- Relacionar las tablas
  SELECT producto, categoria
  FROM productos
    INNER JOIN categorias ON categoria_id = categorias.id;

  -- Solución
  SELECT CONCAT('El producto ', producto,
    ' es de la categoría ', categoria) AS frase
  FROM productos
    INNER JOIN categorias ON categoria_id = categorias.id;


-- 4. Muestra los pedidos de los clientes alemanes realizados por los empleados Nancy o Janet. Ordénalo por cliente, empleado y fecha de pedido.

  -- Clientes alemanes (11 filas)
  SELECT empresa FROM clientes WHERE pais = 'alemania';

  -- Empleados Nancy o Janet (2 filas)
  SELECT nombre FROM empleados WHERE nombre IN ('nancy', 'janet');

  -- Solución (38 filas)
  SELECT c.empresa, e.nombre, p.id, p.fecha_pedido
  FROM pedidos p
    INNER JOIN clientes c ON p.cliente_id = c.id
    INNER JOIN empleados e ON p.empleado_id = e.id
  WHERE c.pais = 'alemania'
    AND e.nombre IN ('nancy', 'janet')
  ORDER BY c.empresa, e.nombre, p.fecha_pedido;


-- 5. Muestra de cada pedido: el id, la fecha, la compañía de envío y el total. Para calcular el total hay que sumar las líneas de detalle correspondientes.

  SELECT id, fecha_pedido, envio_id FROM pedidos;
  SELECT * FROM envios;
  SELECT * FROM detalles;

  -- Solución (830 filas)
  SELECT p.id, p.fecha_pedido, e.empresa,
    SUM(d.cantidad * d.precio_unidad * (1-d.descuento)) AS total
  FROM pedidos p
    INNER JOIN envios e ON p.envio_id = e.id
    INNER JOIN detalles d ON p.id = d.pedido_id
  GROUP BY p.id;

  -- Aparecen todos los pedidos aunque envio_id sea NULL o
  --  no tenga líneas de detalles
  SELECT p.id, p.fecha_pedido, e.empresa,
    SUM(d.cantidad * d.precio_unidad * (1-d.descuento)) AS total
  FROM pedidos p
    LEFT JOIN envios e ON p.envio_id = e.id
    LEFT JOIN detalles d ON p.id = d.pedido_id
  GROUP BY p.id;
