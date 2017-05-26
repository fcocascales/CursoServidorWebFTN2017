Extranet 6: Continuación del frontend
=====================================

  1. Copiar **dia11/frontend** a **dia12/frontend**
  2. Copiar **dia11/database** a **dia12/database**

## Crear el fichero "lib/form.php"

Refactorización:

Este fichero debe contener la función `ImprimirOpciones()` que está en "categoria.php". Cambiar el nombre de la función por `ImprimirFormOpciones()`.

Quitar esta función de "categoria.php". Hacer un `require_once` de "lib/form.php".

## En la ficha del producto "ficha.php"

Mejora:

Mostrar el nombre del producto en la etiqueta `<title>`
