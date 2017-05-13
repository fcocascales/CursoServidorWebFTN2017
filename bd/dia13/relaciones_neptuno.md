Relaciones de la BD neptuno
===========================

## Relaciones de uno a varios

Clave externa --> Clave primaria

Tabla pedidos:

  - pedidos(cliente_id) --> clientes(id)
  - pedidos(empleado_id) --> empleados(id)
  - pedidos(envio_id) --> envios(id)

Tabla productos:

  - productos(proveedor_id) --> proveedores(id)
  - productos(categoria_id) --> categorias(id)

Tabla detalles:

  - detalles(pedido_id) --> pedidos(id)
  - detalles(producto_id) --> productos(id)

Tabla empleados:

  - empleados(jefe_id) --> empleados(id)

## Relaciones de varios a varios

Tabla1 <-- Tabla puente --> Tabla2

Para buscar las relaciones de varios a varios nos fijaremos en las tablas puente.
Las tablas puente se reconocen porque tienen más de una clave externa (contar que tenga más de 1 infinito).

### Tabla puente detalles:

      Detalles --> Pedidos
               --> Productos       

  - Un pedido puede constar de varios productos.
  - Un producto puede aparecer en varios pedidos.

### Tabla puente productos:  

      Productos --> Proveedores
                --> Categorías

  - Un proveedor puede suministrar varias categorías de productos.
  - Una categoría de producto puede ser suministrada por varios proveedores.

### Tabla puente pedidos:

      Pedidos --> Clientes
              --> Empleados
              --> Envíos

  - Un empleado puede hacer pedidos de varios clientes
  - Un cliente puede tener pedidos realizados por diferentes empleados
  - Un cliente puede usar diferentes compañías de envío
  - Una compañía de envío puede suministrar a varios clientes
  - Un empleado puede elegir diferentes compañías de envío
  - Un compañía de envío puede tener pedidos realizados por varios empleados.
