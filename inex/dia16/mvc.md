MVC (Modelo Vista Controlador)
------------------------------

## Instalación

Web de [CodeIgniter](http://www.codeigniter.com/)

Descarga el **CodeIgniter** y descomprímelo en la raíz del sitio que vamos a crear:

      /inex/dia16/mvc

## Conceptos

  - **Modelo** de datos - Son clases que representan tablas de la BD  
  - **Vista** - Son las páginas web
  - **Controlador** - Son clases que usan los modelos y las vistas

## Primeros pasos

### 1) Indicar la raíz del sitio web "application/config/config.php"

      $config['base_url'] = 'http://localhost/inex/dia16/mvc/';

### 2) Indicar el controlador predeterminado "application/config/routes.php"

      $route['default_controller'] = 'blog';

### 3) Crear el controlador "application/controllers/Blog.php"      

Duplica "Welcome.php" y cambia el nombre de fichero y de su clase.

Escribe en el método *index* el siguiente código:

      $this->load->view('blog_inicio');

### 4) Crea la vista "application/views/blog_inicio.php"

Escribe el código HTML y prueba de nuevo la web.

### 5) Pasar datos del controlador a la vista

En el controlador pasamos un array asociativo

      $this->load->view('blog_inicio', $data);  

En la vista el array se ve como variables globales.        
