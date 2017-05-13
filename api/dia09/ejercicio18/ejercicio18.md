Ejercicio 18
============

Mejorar el servidor REST del ejercicio anterior.
Incluir enlaces para que sea HATEOAS

## Preparación:

  - Copiar todo lo del ejercicio anterior.

## Resultado

  - Usar la solución del *file_get_contents*

  - GET "/home"

      {
        title: "Países del Mundo",
        links: [

        ]        
      }

  - GET "/continentes"

        {
          links: [
            {
              "href": "/home"
            },
            {
              "href": "/continentes",
              "method": "POST"
            }
          ],          
          result: [
            {
                "id": 1,
                "nombre": "Africa",
                "href": "/continentes/1"
            },
            {
                "id": 2,
                "nombre": "América",
                "href": "/continentes/2"
            },
            {
                "id": 6,
                "nombre": "Antártida",
                "href": "/continentes/6"
            },
            {
                "id": 3,
                "nombre": "Asia",
                "href": "/continentes/3"
            },
            {
                "id": 4,
                "nombre": "Europa",
                "href": "/continentes/4"
            },
            {
                "id": 5,
                "nombre": "Oceanía",
                "href": "/continentes/5"
            }
          ]
        }

  - POST "/continentes"

        {
          "error": "en construcción"
        }

  - GET "/continentes/1"

        {
          "error": "en construcción"          
        }

  - GET "/continentes/invento/1"

        {
          "error": "uri o método incorrecto"
        }

  - GET "/paises/1"

        {
          links: [
            {
              "href": "/paises/1",
              "method": "PUT"
            },
            {
              "href": "/paises/1",
              "method": "DELETE"
            },
            {
              "href": ".."
            }
          ],
          result: {
              "id": 1,
              "nombre": "Afganistán",
              "capital": "Kabul",
              "moneda": "Afgan\u00ed",
              "continente": "Asia",
              "poblacion": 15814000,
              "extension": 652090
          }         
        }
