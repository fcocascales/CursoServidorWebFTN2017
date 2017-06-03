MVC 2 (Modelo Vista Controlador)
--------------------------------

## 1) Objetivo

Una gestor de noticias de un equipo de fútbol.
Y convertirlo en un backend añadiendo un control de acceso.

## 2) Instalación

Descomprime el [CodeIgniter](http://www.codeigniter.com/)
en la carpeta "/inex/dia17/futbol"

## 3) Base de datos

Crea el archivo "bd_futbol.sql".

## 4) Rutas del backend

Muestra el método index del controlador predeterminado **backend**
 - http://localhost/inex/dia17/futbol - Raíz del sitio
 - http://localhost/inex/dia17/futbol/index.php - Motor de CodeIgniter
 - http://localhost/inex/dia17/futbol/index.php/backend/index - Raíz de la web
 - http://localhost/inex/dia17/futbol/index.php/backend - index es predeterminado

El controlador **noticias**
 - http://localhost/inex/dia17/futbol/index.php/noticias - Gestor de noticias
 - http://localhost/inex/dia17/futbol/index.php/noticias/index - Listado de noticias
 - http://localhost/inex/dia17/futbol/index.php/noticias/nuevo - Formulario nueva noticia
 - http://localhost/inex/dia17/futbol/index.php/noticias/insertar - Insertar en la BD
 - http://localhost/inex/dia17/futbol/index.php/noticias/editar/1 - Formulario modificar 1
 - http://localhost/inex/dia17/futbol/index.php/noticias/modificar/1 - Modificar 1 en la BD
 - http://localhost/inex/dia17/futbol/index.php/noticias/borrar/1 - Borrar 1 en la BD

En general la ruta es:  http://dominio/raiz/index.php/controlador/metodo/uri

  - El controlador **backend** con el método *index*
  - El controlador **noticias** con los métodos *index*, *nuevo*, *insertar*, *editar*, *modificar* y *borrar*

## 5) Configurar

  - Ruta base (application/config/config.php)
    - $config['base_url'] = 'http://localhost/inex/dia17/futbol/';
  - Controlador predeterminado (application/config/routes.php):
    - $route['default_controller'] = 'backend';
  - Conexión a la base de datos (application/config/database.php)
    - 'hostname' => 'localhost',
    - 'username' => 'futbol',
    -	'password' => '123',
    -	'database' => 'bd_futbol',

## 6) Controlador de inicio del backend   

Duplica el fichero "controllers/Welcome.php" como "controllers/Backend.php"

## 7) Vistas

  - views/backend/inicio.php
  - views/backend/template/head.php
  - views/backend/template/foot.php

Probar la web.

## 8) ¿Como escribir correctamente los enlaces?

Usar la función **site_url()** del helper **url**

Usar el helper URL. Un helper es una biblioteca de funciones.
Para que este helper esté siempre disponible se ha de indicar en autoload.

En el archivo "application/config/autoload"

      $autoload['helper'] = array('url');

El helper url está ubicado en "system/helpers/url_helper.php"    

### El código de los enlaces tiene este formato:

    <?= site_url() ?>/controlador/metodo/uri

## 9) Controlador **noticias**

El archivo es "application/controllers/Noticias.php" que se puede duplicar el controlador anterior.

## 10) Crear la vista de inicio del controlador noticias

  - Ubicado en "application/views/backend/noticias/index.php"
  - Debe tener un enlace a insertar noticia
  - Debe mostrar una tabla de noticias con enlaces a modificar y a borrar

## 11) Crear el modelo de datos de la tabla noticias

 - Ubicado en "application/models/ModeloNoticias.php".
 - Es una clase que hereda de *CI_Model*
 - Tendrá 5 métodos: listado, ficha, insertar, modificar y borrar.
 - En el método *listado()* obtenemos todo el contenido de la tabla Noticias:
   - `$this->db->get('NOMBRE_TABLA')`
  - Algunos métodos del objeto que me da el get son:
    - *result()* - Un array indexado de objetos
    - *num_rows()* - Número de filas
    - *result_array()* - Un array indexado de array asociativos
    - *row()* - Una fila como objeto
    - *row_array()* - Una fila como array asociativo

## 12) En el controlador conectaremos el modelo con la vista

  1. Cargar la vista en el constructor del controlador para que esté disponible desde cualquier método:
    - `$this->load->model('NOMBRE_MODELO');`
  2. En el método *index* del controlador llamar al método *listado* del modelo para obtener los datos:
    - `$this->NOMBRE_MODELO->nombre_metodo();`
  3. Crear un array asociativo con todos los datos que hemos de pasar a la vista. La vista verá las claves del array asociativo como variables globales.
    - `$data = array( ... );`  
  4. Pasar dichos datos a la vista:
    -	`$this->load->view('NOMBRE_VISTA', $data);`

## 13) Autocargar la biblioteca de la base de datos

Para que la base de datos funcione hay que configurarla en "config/database.php" y autocargar la biblioteca "database".

  - En "application/config/autoload.php"
    - $autoload['libraries'] = array('database');

## 14) Acabar la vista que muestra las noticias.
  - Ubicado en "application/views/backend/noticias/index.php"
  - Mostrar en una tabla HTML los datos de la tabla Noticias

## 15) Insertar una noticia
  - Un formulario: "http://.../index.php/noticias/nuevo"
  - El action del formulario: "http://.../index.php/noticias/insertar"

Crear los métodos *nuevo* e *insertar* en el controlador Noticias.
