Ejercicio 17
============

Realizar un servidor REST.

## Preparación:

  - Copia el fichero "rest_functions.php" del ejercicio 16.
  - Copiar los siguientes ficheros del ejercicio 12:
    - "continentes.json.php"
    - "paises.json.php"
    - "pais.json.php"

## Enunciado

Crea el servidor REST en el fichero "rest.php".
  - Incluye el fichero "rest_functions.php".
  - Analiza el URI y el QUERY
    para dar la respuesta adecuada

Elementos que pueden ser útiles:
  - file_get_contents(?)
  - include(?)
  - header("Location: ?")
  - etc.

## Comprueba que funciona

Para hacer la comprobación puedes ir a "index.php"

  - GET **rest.php/continentes**

    http://localhost/api/dia09/ejercicio17/rest.php/continentes

    Tiene que dar la lista de continentes en JSON.<br>
    Igual que si llamase directamente a: *continentes.json.php*

  - GET **rest.php/paises?continente_id=1**

    http://localhost/api/dia09/ejercicio17/rest.php/paises?continente_id=1

    Tiene que dar la lista de países del continente 1 en JSON.<br>
    Igual que si llamase a: *paises.json.php?continente_id=1*

  - GET **rest.php/paises/7**

    http://localhost/api/dia09/ejercicio17/rest.php/paises/7

    Tiene que dar el detalle del país 7 en JSON.<br>
    Igual que si llamase a: *pais.json.php?id=7*
