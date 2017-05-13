Ejercicio 15
============

Empezar un servidor REST.

Siglas:

  - REST = REpresentational State Transfer
  - HATEOAS = Hypermedia As The Engine Of Application State
  - URL = Uniform Resource Locator
  - URI = Uniform Resource Identifier  
  - HTTP = Hypertext Transfer Protocol

## REST (REpresentational State Transfer)

Un servicio web REST trabaja con recursos. Cada recurso tiene una dirección única.

### Tecnología HTTP

REST se basa en la tecnología HTTP. Usa los siguientes elementos:

  - **uri**: /dir1/dir2/recurso
  - **method**: GET, POST, PUT, DELETE
  - **query string**: ?abc=123&def=456
  - **content**: mensajes en formato JSON o XML que se envían o reciben.

### URL  

Una dirección REST tiene las siguientes partes:

    protocolo://dominio/ámbito/recurso1/recurso2?query-string

Por ejemplo:
  - https://viajes.com/mundo/continentes/paises?continente_id=2

### Métodos

El método indica la acción a efectuar con el recurso

  - **GET** - Obtener un recurso (SHOW, SELECT)
  - **POST** - Crear un nuevo recurso (CREATE, INSERT INTO)
  - **PUT** - Modificar un recurso existente (ALTER, UPDATE)
  - **DELETE** - Borra un recurso (DROP, DELETE FROM)

#### Ejercicio 12 (sin REST)

  - `continentes.json.php`- Lista de los continentes
  - `paises.json.php?continente_id=1`- Países del continente 1
  - `pais.json.php?id=1`- Detalle del país 1

#### Uso de REST (método y URI)

  - GET  `/mundo/continentes` - Lista de continentes
  - GET  `/mundo/continentes/3` - Detalle del continente 3
  - GET  `/mundo/paises` - Lista de países
  - GET  `/mundo/paises?continente_id=1` - Países del continente 1
  - GET  `/mundo/paises/7` - Detalle del país 7
  - POST `/mundo/paises` - Crear un país nuevo
  - DELETE `/mundo/paises/3` - Borra el país 3
  - PUT `/mundo/paises/7` - Cambiar el país 7

## Creación del servidor REST

El servidor será un sólo fichero llamado **rest.php**

Las direcciones con URI quedarían así:

  - rest.php/mundo/continentes
  - rest.php/mundo/paises/7
  - rest.php/mundo/paises?continente_id=1
  - etc.

Mediante la configuración de Apache se puede ocultar el fichero php. Hay que use el *mod_rewrite*.

Otra solución es que "mundo" fuera un fichero php sin extensión. Mediante la configuración de Apache se puede ejecutar ficheros php que no tengan su extensión.
