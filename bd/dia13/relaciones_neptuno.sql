/*
  Establecer las relaciones de uno a varios
  para la integridad referencial entre las tablas.
  Este mecanismo se pone en marcha cuando haces un INSERT/UPDATE/DELETE.
  No se usa con el SELECT.
*/

/* Tabla pedidos:
  - pedidos(cliente_id) --> clientes(id)
  - pedidos(empleado_id) --> empleados(id)
  - pedidos(envio_id) --> envios(id)
*/

ALTER TABLE pedidos
  ADD FOREIGN KEY (cliente_id) REFERENCES clientes(id),
  ADD FOREIGN KEY (empleado_id) REFERENCES empleados(id),
  ADD FOREIGN KEY (envio_id) REFERENCES envios(id);

/* Tabla productos:
  - productos(proveedor_id) --> proveedores(id)
  - productos(categoria_id) --> categorias(id)
*/

ALTER TABLE productos
  ADD FOREIGN KEY (proveedor_id) REFERENCES proveedores(id),
  ADD FOREIGN KEY (categoria_id) REFERENCES categorias(id);

/* Tabla detalles:
  - detalles(pedido_id) --> pedidos(id)
  - detalles(producto_id) --> productos(id)

  Al borrar un pedido se borra automáticamente todo su detalle (CASCADE)
*/

ALTER TABLE detalles
  ADD FOREIGN KEY (pedido_id) REFERENCES pedidos(id) ON DELETE CASCADE,
  ADD FOREIGN KEY (producto_id) REFERENCES productos(id);

/* Tabla empleados:
  - empleados(jefe_id) --> empleados(id)
*/

ALTER TABLE empleados
  ADD FOREIGN KEY (jefe_id) REFERENCES empleados(id);
