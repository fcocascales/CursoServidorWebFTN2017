Servidor y Cliente
==================

Un protocolo es como se hablan el cliente y el servidor.

## Protocolo de comunicación web:
  - HTTP - Hypertext Transfer Protocol
  - HTTPS - HTTP Secure (datos cifrados)

## Cliente y servidor web:
  - El cliente es el navegador web (Cliente HTTP): Firefox
  - El servidor es el Apache.

## Comunicación Cliente Servidor  

  1. Cliente hace una petición al servidor: Request
  2. Servidor da una respuesta al cliente: Response

Más detallado:

  1. El cliente pide una página al servidor.
     Es necesario que el cliente conozca la dirección del servidor. http://acme.com
  2. El servidor recibe la petición del cliente.
     Busca la página web predeterminada: *index.html* o *index.php* y como respuesta se la envía al cliente.
  3. El cliente recibe del servidor la página *index.html*.
     El navegador web renderiza la página.
     Si la página HTML hace referencia a ficheros JPG, CSS, JS, se los pide al servidor web.

Qué ocurre cuando se pide una página PHP.

  1. El cliente pide una página PHP al servidor.
     http://acme.com/carpeta/pagina.php
  2. El servidor recibe la petición. Busca el fichero *pagina.php* y lo encuentra. Este fichero es un programa escrito en el lenguaje PHP que genera código HTML. El servidor ejecuta el programa. El servidor envía al cliente el resultado de la ejecución del código.
