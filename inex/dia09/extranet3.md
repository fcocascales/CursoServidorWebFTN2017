Extranet 3: Continuación del frontend
=====================================

  1. Copiar **dia08/frontend** a **dia09/frontend**
  2. Copiar **dia08/database** a **dia09/database**

## Refactorización del código de acceso a la BD  

### Modificar "lib/conexion.php"

 * No crear nuevos objetos PDO si ya se había creado uno antes.
 * Comprobar si ya está creado el objeto PDO.
 * Convertir el código en una clase de atributos y métodos estáticos.
 - Métodos para facilitar las consultas sobre la BD

### Modificar "lib/categorias.php"

 - Usar la nueva clase conexion.

### Crear "lib/productos.php"

 - Acceder a la tabla productos.

## Mostrar productos en la página "categoria.php"

## Productos de la categoría  (el contenido de la página)

 - Mostrar 6 productos por página.
 - Filtrar por rangos de precio.
 - Filtrar por proveedor.
 - Ordenar por precio ascendente o descendente. Ordenar por producto.
