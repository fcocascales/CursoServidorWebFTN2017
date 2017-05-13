Ejercicio 12
============

Obten la lista de continentes y la lista de países por continente.

  - Base de datos: **bd_mundo**
  - Tablas: **continentes** y **paises**
  - Conexión con la BD: **PDO** y uso de **fetchAll**
  - Para codificar JSON: **json_encode** JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK
  - Archivos: **continentes.json.php**, **paises.json.php**, etc.
  - Formato de salida: **JSON**

## continentes.json.php

Debe mostrar un archivo JSON con el siguiente formato:

    [
      { "id":1, "nombre":"Continente1" },
      { "id":2, "nombre":"Continente2" },
      ...
    ]

## paises.json.php

Debe leer el parámetro GET continente_id para realizar un filtrado de los países por continente.
Ejemplo: "paises.json.php?continente_id=1"

El formato de salida JSON es:

    [
      { "id":1, "nombre":"País1" },
      { "id":2, "nombre":"País2" },
      { "id":3, "nombre":"País3" },
      ...
    ]

## pais.json.php

Muestra información de un solo país. Necesita el parámetro GET id.
Ejemplo: "pais.json.php?id=1"    

El formato de salida JSON es el siguiente:

    {
      "id": 1,
      "nombre": "Nombre del país",
      "capital": "La capital del país"
      "moneda": "Nombre de la moneda",
      "continente": "Nombre del continente",
      "poblacion": 1000000,
      "extension": 50000
    }

## pais_ampliado.json.php

Muestra información ampliada de un solo país. Necesita el parámetro GET id.
Ejemplo: "pais_ampliado.json.php?id=1".

El formato de salida JSON es el siguiente:

    {
      "id":1,
      "nombre": "Nombre del país",
      "capital": "La capital del país",
      "moneda": "Nombre de la moneda",
      "continente": "Nombre del continente",
      "poblacion": 1000000,
      "extension": 50000,
      "idiomas": [ "Idioma1", "Idioma2", "Idioma3", ... ],
      "vecinos": [
          { "id":1, "nombre":"País1" },
          { "id":2, "nombre":"País2" },
          { "id":3, "nombre":"País3" },
          ...
      ]
    }

Hay que hacer 3 consultas SQL para obtener los datos requeridos.
  - Obtener los datos básicos del país
  - Obtener la lista de idiomas del país
  - Obtener la lista de países vecinos

Los datos de las tres consultas hay que unirlos en un sólo array asociativo.

    $array1['idiomas'] = $array2;
    $array1['vecinos'] = $array3;
