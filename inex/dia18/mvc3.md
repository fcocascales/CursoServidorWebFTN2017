MVC 3 (Modelo Vista Controlador)
--------------------------------

Duplicar la carpeta dia17 como dia18

## 16) Configuración

Indicar la nueva dirección de la web en "application/config/config.php"
- $config['base_url'] = 'http://localhost/inex/dia18/futbol/';

## 17) Añadir una hoja de estilo

Crear la carpeta "futbol/public/css" y dentro el archivo "backend.css"

  - futbol
    - application
    - system
    - public
      - css
        - backend.css

En la hoja de estilos cambiar el color de fondo del body y todo los estilos que se quiera.

### Crear el enlace a la hoja de estilos

 - En el archivo "views/backend/template/head.php"
  - <link rel="stylesheet" href="<?= base_url() ?>public/css/backend.css">

## 18) No permitir repetir títulos de noticias

En la tabla "noticias" de "bd_futbol"

    ALTER TABLE noticias ADD UNIQUE(titulo);

En el backend insertar una noticia con el mismo título que otra para que de error.

## 19) Crear los métodos "editar" y "modificar" en el controlador "Noticias"

  - Crear el método ficha y modificar de ModeloNoticias
  - Crear la vista "editar" duplicandola de la vista "nuevo"

## 20) Crear los métodos "borrando" y "borrar" en el controlador "Noticias"

## 21) Entorno de desarrollo vs producción

En **desarrollo** queremos ver todos los errores. Por omisión CodeIgniter está en desarrollo. Se muestran los errores de la base de datos.
En **producción** no se ven los errores de la BD.

Para a pasar a modo _producción_ editar el fichero "futbol/index.php"

 - Comentar la línea:
  - `//define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');`
 - Añadir la línea:
  - `define('ENVIRONMENT', 'production');`









--
