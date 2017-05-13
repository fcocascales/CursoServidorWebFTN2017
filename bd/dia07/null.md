null
====

El valor **NULL** es cuando un campo no tiene valor, o es desconocido o nunca se introdujo.

  - El valor 0 de un campo numérico no es null.
  - El valor '' de un campo de texto no es null.

Cuando en una fórmula o expresión uno de los valores es null el resultado final es null.

  - SELECT 5 + 3 + NULL;
  - SELECT CONCAT('Hola ', NULL);

Se puede asignar un valor NULL a un campo  

## Hay unas funciones para trabajar con valores NULL.

  - **COALESCE** convierte los valores nulos a otro valor.  

    - SELECT COALESCE('Pepe','Fin'); --> 'Pepe'
    - SELECT COALESCE(NULL, 'Fin'); --> 'Fin'
    - SELECT COALESCE(nombre, empresa, 'No hay') FROM clientes;

  - **NULLIF** si el valor es igual a otro da nulo

    - SELECT NULLIF(nombre, 'Pepe') FROM clientes;

  - **<=>** comparador de igualdad.
  
    - Nunca da NULL.
    - Si los operandos son iguales da 1 o TRUE
    - Si los operandos son diferentes da 0 o FALSE.

## Cómo se filtran en el WHERE los valores nulos

El valor NULL se evalua igual que FALSE

  Esto no se debe hacer:
  - ~~WHERE campo = NULL~~
  - ~~WHERE campo <> NULL~~

  porque cuando se hace una expresión, en este caso es una comparación, con un valor null todo da null.

La forma correcta:
  - WHERE campo IS NULL
  - WHERE campo IS NOT NULL
