Formulario de contacto POO
==========================

Objetivo:
  Utilizar una clase en el formulario de contacto.

Carpetas y ficheros:
  - web1                  - Subcarpeta dentro de dia13
    - contacto_form.php   - Copiado del día 11
    - contacto_send3.php  - Copiado del día 11
    - Form.php            - Archivo nuevo

En el archivo Form.php crear una clase llamada **Form**.
Hay que ir cortando y pegando código de *contacto_send3.php* hacia *Form.php*:
  - Las variables globales se deben convertir en atributos de la clase.
  - Las funciones se han de convertir en métodos de la clase.  
  - Cambiar el código referido a la variable global en código referido al atributo.

El programa principal de *contacto_send3.php* hay que cambiarlo para usar la clase Form.
  - Con include se ha de importar el archivo Form.php,
  - hay que crear un objeto de la clase Form y
  - trabajar con dicho objeto para realizar la misma tarea que hacía antes.  

Subirlo por FTP a la web del curso y comprobar que el formulario se envía.
