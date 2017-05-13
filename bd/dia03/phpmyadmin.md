phpMyAdmin
==========

## Hacer en login en el phpMyAdmin local

Abrir el fichero de configuración de phpMyAdmin:

  C:\\xampp\\phpMyAdmin\\config.inc.php

Cambiar la línea que pone:

    $cfg['Servers'][$i]['auth_type'] = 'config';

por

    $cfg['Servers'][$i]['auth_type'] = 'http';    

Ahora al entrar en http://localhost/phpmyadmin pide usuario y contraseña. El usuario es **root** y no hay contraseña.
