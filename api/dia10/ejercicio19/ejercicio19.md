Ejercicio 19
============

Realizar un cliente API REST

Se trata de obtener la latitud y longitud de una ciudad.

Crea el fichero "geocode.php".
  1. Crea un formulario donde escribir la ciudad y un botón de enviar.
  2. Consulta la ciudad en el *API geocode de Google* para obtener la latitud y longitud.
  3. Muestra la latitud y longitud.
  4. Muestra esa localización en el mapa de Google usando una etiqueta `<iframe>`

Elementos a usar:
  - file_get_contents
  - json_decode
  - urlencode, http_build_query

## Api Geocode de Google

Petición:

  GET https://maps.googleapis.com/maps/api/geocode/json?address=Barcelona

Respuesta:

      {
        "results": [
          {
            ...
            "geometry": {
                ...
                "location" : {
                   "lat" : 41.3850639,
                   "lng" : 2.1734035
                },
                ...
            },
            ...
          }
        ]
      }
