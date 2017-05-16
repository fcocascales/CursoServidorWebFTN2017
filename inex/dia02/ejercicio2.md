Ejercicio 2
-----------

Crear informes en HTML.
Obtener datos de la base de datos usando PDO y formatearlo en HTML.

  - Base de datos **bd_neptuno**.
  - Cada solución va en un fichero aparte llamados: *solucion1.php*, *solucion2.php*, etc.

**1**) Mostrar una lista de las empresas de los proveedores ordenado alfabéticamente.

```html
      <h1>Proveedores</h1>
      <ul>
        <li>Proveedor 1</li>
        <li>Proveedor 2</li>
        ...
      </ul>
```      

**2**) Mostrar el nombre, los apellidos y el cargo de los empleados en una tabla.

```html
    <h1>Empleados</h1>
    <table>
       <tr><th>Nombre</th><th>Apellidos</th><th>Cargo</th></tr>
       <tr><td>...</td><td>...</td><td>...</td>
       <tr><td>...</td><td>...</td><td>...</td>
       ...
    </table>
```        

**3**) Mostrar la empresa de los clientes de *alemania* en una lista ordenada.

  ```html
        <h1>Clientes de Alemania</h1>
        <ol>
          <li>Empresa 1</li>
          <li>Empresa 2</li>
          ...
        </ol>
  ```        

**4**) Mostrar todas las categorías de productos con etiquetas H2. Mostrar también los nombres y precios de los productos de cada categoría en lista.

```html  
      <h1>Categorías y productos</h1>
      <h2>Categoría 1</h2>
      <ul>
        <li><strong>Producto11</strong> - Precio11</li>
        <li><strong>Producto12</strong> - Precio12</li>
        ...
      <ul>
      <h2>Categoría 2</h2>
      <ul>
        <li><strong>Producto21</strong> - Precio21</li>
        ...
      <ul>
      ...
```

**5**) Mostrar los países de cada cliente con H2. Mostrar en una tabla los clientes de cada país. Poner los campos código, empresa y contacto.

```html  
      <h1>Clientes por país</h1>
      <h2>País 1</h1>
      <table>
        <tr><th>Código</th><th>Empresa</th><th>Contacto</th></tr>
        <tr><td>...</td><td>...</td><td>...</td></tr>
        ...
      </table>
      <h2>País 2</h2>
      <table>
        ...
```  

**6**) Mostrar los años de pedidos con H2. Dentro de cada año mostrar los meses con H3. Dentro de los meses mostrar los pedidos con OL. Poner los campos: id, fecha_pedido y el total del pedido.

```html  
      <h1>Pedidos por años y meses</h1>
      <h2>Año 1996</h2>
      <h3>Julio</h3>
      <ol>
        <li value="id1">fecha1 - total1</li>
        <li value="id2">fecha2 - total2</li>
        ...
      </ol>
      <h3>Agosto</h3>
      ...
      <h2>Año 1997</h2>
      <h3>Enero</h3>
      ...     
```  

**7**) Mostrar algunos campos del pedido con id=11000 en una lista UL

```html  
      <h1>Pedido 11000</h1>
      <ul>
        <li>Cliente: ... </li>
        <li>Empleado: ...</li>
        <li>Fecha pedido: ...</li>
        <li>Fecha envío: ...</li>
        <li>Fecha entrega: ...</li>
        <li>Cía. envío: ...</li>
        <li>Cargo: ...</li>
      </ul>

```

**8**) Mostrar los campos fecha_pedido, cliente, empleado y compañía de envío del pedido 11000 en una lista. Debajo poner el detalle del pedido en una tabla con los campos producto, precio, cantidad e importe.

```html  
      <h1>Detalles del pedido 11000</h1>
      <ul>
        <li>Fecha pedido: ...</li>
        <li>Cliente: ...</li>
        <li>Empleado: ...</li>
        <li>Cía. envío: ...</li>
      </ul>
      <table>
        <tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Importe</th></tr>
        <tr><td>...</td><td>...</td><td>...</td><td>...</td></tr>
        ...
      </table>
      <p>Total de importes: ...</p>
```  
