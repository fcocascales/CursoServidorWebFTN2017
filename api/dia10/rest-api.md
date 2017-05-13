Rest API en aplicaciones web
============================

## Clientes REST

  - **Rested** - Plugin Firefox y Chrome
  - **Postman** - Plugin Chrome

Para hacer petición REST a un servidor hay que proporcionar:
    - la URI que es el recurso
    - el QUERY STRING que es la consulta
    - el METHOD indica la acción
    - el CONTENT es el mensaje JSON

## Enlaces a APIs de REST

[apigee](https://apigee.com/console)

## API Rest

### Averiguar la latitud y longitud de una ciudad

[others](https://apigee.com/console/others)

  - GET https://maps.googleapis.com/maps/api/geocode/json?address=&sensor=false
  - GET https://maps.googleapis.com/maps/api/geocode/json?address=Barcelona

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

### Obtener fotos de una latitud y longitud

  - [Instagram](https://apigee.com/console/instagram)

  - GET /media/search <br>
    https://api.instagram.com/v1/media/search

  - Query:
      lat: 41.3850639
      lng: 2.1734035

  - https://api.instagram.com/v1/media/search?lat=41.3850639&lng=2.1734035








#
