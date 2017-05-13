Ejercicio 16
============

Simplificar el uso de REST mediante funciones o clases.

## Funciones

Estilo procedimental "rest_functions.php".
Realizar las siguientes funciones:

  - `getUri()` '/paises/1'
  - `getUriItems()` array('paises', '1')
  - `getQueryString()` 'continente_id=2&pais_id=10'
  - `getQueryItems()` array('continente_id'=>2, 'pais_id'=>10)
  - `getMethod()` GET, POST, PUT, DELETE
  - `getContent()` El contenido del mensaje JSON decodificado

  - `sendResponse($data)` Escribe la respuesta del servidor en formato JSON

## Clases

Estilo programación orientada a objetos "RestRquest.php" y "RestResponse.php".

### Métodos de la clase RestRequest:
  - `getUri()` '/paises/1'
  - `getUriItems()` array('paises', '1')
  - `getQueryString()` 'continente_id=2&pais_id=10'
  - `getQueryItems()` array('continente_id'=>2, 'pais_id'=>10)
  - `getMethod()` GET, POST, PUT, DELETE
  - `getContent()` El contenido del mensaje JSON decodificado

### Métodos de la clase RestResponse:  
  - `putContent(data)` Establece el contenido del mensaje
  - `send()` Escribe la respuesta del servidor en formato JSON
