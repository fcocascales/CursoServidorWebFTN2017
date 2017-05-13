Índices en las tablas de la BD
==============================

Tipos de índices:
  - **Clave primaria** - Clave única principal. Hay 1 por tabla.
  - **Clave única** - Clave que impide datos duplicados.
  - **Clave** - Se usa para claves externas. Permite búsquedas y ordenaciones inmediatas.

Lo habitual es que tanto la *clave primaria* como la *clave externa* sean números enteros INT. Estas son las claves usadas al crear una relación entre dos tablas.

¿Qué es un índice?
------------------

Cuando un campo tiene un índice es un campo indexado.

Los datos de la tabla se almacenan.

| id | nombre | cp     |
|----|--------|--------|
| 1  | Pepe   | 08020  |
| 2  | Montse | 08004  |
| 3  | Ana    | 08010  |
| 4  | Bea    | 08001  |

Al campo *nombre* le ponemos un índice que se almacena como:

| nombre | id |
|--------|----|
| Ana    |  3 |
| Bea    |  4 |
| Montse |  2 |
| Pepe   |  1 |

Al campo *cp* le ponemos un índice que se almacena como:

| cp    | id |
|-------|----|
| 08001 |  4 |
| 08004 |  2 |
| 08010 |  3 |
| 08020 |  1 |

- **Características**
  - Un índice se puede referir a un campo o a varios campos a la vez.
  - Puede ser un índice que no permita duplicados o único.
  - Los índices se usan en los campos que intervienen en las relaciones entre tablas.
- **Ventajas**
  - Las búsquedas y las ordenaciones por un campo indexado son inmediatos.
- **Inconvenientes**.
  - Necesita espacio extra para almacenar los índices.
  - Es más costoso insertar o modificar o borrar datos. Porque se tiene que hacer en la tabla y en cada uno de sus índices. Si la tabla no se va a actualizar a menudo no hay problema de añadir todos los índices que se quiera.
