Ejercicio 20
============

Realizar un cliente API REST genérico en código PHP.
Que se puedan enviar no sólo peticiones GET sino peticiones PUT, POST, DELETE.

Ficheros:
  - **rest_client.php** - Una función para hacer la petición y recibir la respuesta. Se le puede pasar el método y un contenido.
  - **rest_server.php** - Es una copia del fichero *rest_functions.php* del Ejercicio 17

Pruebas para ver si funciona.  
  - **test_client.php**
  - **test_server.php**

Comunicación cliente servidor:
  1. El cliente elabora una petición (request) y se la envía al servidor.
  2. El servidor recibe la petición del cliente. Elabora una respuesta (response) y se la envía el cliente.
  3. El recibe recibe la respuesta del servidor.
