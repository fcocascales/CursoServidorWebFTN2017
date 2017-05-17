Subir ficheros al servidor
==========================

Un alternativa al FTP.

## Formulario para enviar

Se realiza con un formulario que tenga lo siguiente:

  - `<form ... method="post" enctype="multipart/form-data">`
  - `<input type="file" name="foto" />`

## Recibir en PHP

A través de la variable global `$_FILES` se accede a la información de los ficheros que se han subido.

A través de la variable global `$_POST` se accede al resto de campos.

### Campos de `$_FILES`

  - `$_FILES['foto']['name']`     = "paella.jpg"
  - `$_FILES['foto']['tmp_name']` = "C:\\xampp\\tmp\\php8FUjW4"
  - `$_FILES['foto']['size']`     = 5.600 bytes
  - `$_FILES['foto']['type']`     = "image/jpeg"
  - `$_FILES['foto']['error']`    = 0

### Códigos de error

| código | constante            | significado                         |
|--------|----------------------|-------------------------------------|
| 0      | UPLOAD_ERR_OK        |	Tot bé                              |
| 1      | UPLOAD_ERR_INI_SIZE  |	El fitxer és massa gran `php.ini`   |
| 2      | UPLOAD_ERR_FORM_SIZE |	El fitxer és massa gran `<form>`    |
| 3      | UPLOAD_ERR_PARTIAL   |	El fitxer està incomplet            |
| 4      | UPLOAD_NO_FILE       | No hi ha fitxer                     |
| 6      | UPLOAD_NO_TMP_DIR    |	No hi ha carpeta temporal `php.ini` |
| 7      | UPLOAD_CANT_WRITE    | No hi ha permisos d'escriptura      |
| 8      | UPLOAD_ERR_EXTENSION |	Extensió incorrecta `<form>`        |

### Funciones PHP

  - is_uploaded_file($nom)
  - move_uploaded_file($origen, $destino)

## php.ini

php.ini (Configuració global del PHP)

 - Ubicació en XAMPP: C:\\xampp\\php\\php.ini
 - Ubicació en Ubuntu: /etc/php5/apache2/php.ini

  - Màxim número de pujades simultànies:
     - max_file_uploads = 10
  - Grandaria màxim del fitxer pujat:
     - upload_max_filesize = 2M
  - Ubicació de la carpeta temporal:
     - upload_tmp_dir = "c:\\xampp\\temp"

Si es modifica l'arxiu php.ini cal parar i tornar a engegar l'Apache  
