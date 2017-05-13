Crear la BD e importar el SQL en el servidor remoto
===================================================

  1. Ir al panel de control de la web
    - https://ALUMNO.fomentformacio.tech:8083
    - Aceptar la conexión no segura
    - Introducir el usuario (NIF) y la contraseña
  2. En **BD** crear una nueva base de datos:
    - *Nombre base de datos:* NIF_dinosaurios
    - *Nombre de usuario:* NIF_dinos
    - *Contraseña:* dinosaurios
  3. Ir al phpMyAdmin del servidor remoto
    - http://ALUMNO.fomentformacio.tech/phpmyadmin
    - Ignorar todos los errores
    - Seleccionar la BD *NIF_dinosaurios*
    - Importar el archivo *bd_mesozoico.sql*
