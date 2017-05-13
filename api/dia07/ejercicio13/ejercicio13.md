Ejercicio 13
============

Realiza una *aplicación web* que use los JSON del ejercicio 12.
Se trata de consumir el *servicio web* ofrecido por el sitio del ejercicio anterior.

Vamos a crear la ficha de un país en **pais.php**.
Tendrá un formulario de búsqueda del país mediante desplegables
de continentes y países.

## Proceso a seguir:

  1. Selecciona el continente desde un `<select>` y envía el formulario.
  2. Desde un segundo `<select>` (rellenado con los países del continente elegido) selecciona el país y envía el formulario.
  3. Muestra en el HTML los siguientes datos del país seleccionado:
    - Nombre, Capital, Moneda, Continente, Población y Extensión.

*Sugerencia:* Para no tener que pulsar el botón de enviar el formulario después de elegir una opción del desplegable se podría añadir algo de código JavaScript que lo solucione.    

## Importante

  1. **No se puede usar ni SQL ni PDO**. Hay que usar sólo los datos del JSON. Para filtrar los datos JSON hay que poner los parámetros GET que habíamos puesto en el JSON.
  2. La ruta del JSON debe ser una **URL completa** empezando por `http://`
