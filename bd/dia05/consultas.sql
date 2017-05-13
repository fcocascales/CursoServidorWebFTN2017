-- Consultas de 2 tablas

/*
  Muestra todas las columnas de ambas tablas.
    Muestra 5 columnas
  Hace todas las combinaciones posibles entre
  la filas de personas y las filas de mascotas.
    Muestra 30 filas = 6 x 5 filas
  Producto cartesiano con las filas.
*/
SELECT *
FROM personas, mascotas;

/*
  Producto cartesiano del nombre de las personas
  con el nombre de las mascotas
*/
SELECT personas.nombre, mascotas.nombre
FROM personas, mascotas;

-- Uso de alias para los nombres de tabla
SELECT p.nombre, m.nombre
FROM personas p, mascotas m;

SELECT p.nombre, m.nombre
FROM personas p CROSS JOIN mascotas m;

/*
  Las mascotas y sus dueños
  - No aparecen las personas sin mascotas
  - No aparecen las mascotas sin dueño
  Aparecen 4 filas
  Esto es la relación que hay entre ambas tablas.
*/
SELECT m.nombre, p.nombre
FROM personas p, mascotas m
WHERE p.id = m.persona_id;

SELECT m.nombre, p.nombre
FROM personas p
  INNER JOIN mascotas m ON p.id = m.persona_id;

SELECT m.nombre, p.nombre
FROM mascotas m
  INNER JOIN personas p ON p.id = m.persona_id;

/*
  Mostrar el nombre de todas las personas
    y si tienen mascota su nombre.
  Muestra 7 filas.
  Cuando no hay mascota pone NULL.
*/
SELECT m.nombre, p.nombre
FROM personas p
  LEFT JOIN mascotas m ON p.id = m.persona_id;

/*
  Mostrar el nombre de todas las mascotas
   y si tiene dueño su nombre
  Muestra 5 filas.
  Cuando no hay dueño pone NULL.
*/
SELECT m.nombre, p.nombre
FROM personas p
  RIGHT JOIN mascotas m ON p.id = m.persona_id;

/*
  Mostrar todas las mascotas y todas las personas.
  Si falta la mascota que ponga NULl
  Si falta el dueño que ponga NULL
  Muestra 8 filas
  Da ERROR: Este tipo de consultas no funciona en MySQL
*/
SELECT m.nombre, p.nombre
FROM personas p
  OUTER JOIN mascotas m ON p.id = m.persona_id;

/*
  Hay cuatro tipos de unión entre tablas:
    CROSS JOIN =
      Producto cartesiano (30)
    INNER JOIN =
      Muestra las filas con relación (4)
    LEFT|RIGHT JOIN =
      Muestra todo de un lado que no tiene relación
      y las filas con relación (7, 5)
    OUTER JOIN =
      Muestra todo de un lado que no tiene relación,
      todo del otro lado que no tiene relación
      y las filas con relación (8)
    UNION =
      Suma las filas de ambas de tablas  (11)
*/

/*
  Muestra una lista con todos los nombre
  de personas y mascotas
*/
SELECT nombre
FROM personas
UNION
SELECT nombre
FROM mascotas;

SELECT nombre, 'PERSONA' AS tipo
FROM personas
UNION
SELECT nombre, 'MASCOTA'
FROM mascotas
ORDER BY RAND();










--
