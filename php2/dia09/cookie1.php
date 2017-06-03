<?php // cookies1.php

/*
  Una cookie (galletita)

  Extensión del Firefox:
    "I don't care about cookies"

  Consultando las cookies se puede espiar
  al usuario sobre las páginas que ha visto.

  ¿Qué es una cookie?

  Unos datos que el servidor guarda en el
  navegador del cliente.

  Sólo desde el servidor que ha creado la
  cookie se puede consultar la cookie.

  Las cookies caducan al cabo de un tiempo.

  Desde el navegador web se pueden borrar
  las cookies.

  El tamaño de la cookie no puede ser demasiado
  grande. Alrededor de 1KB

  La navegación de incógnito o privada no guarda
  ni el historial, ni contraseñas ni cookies.

  Para ver las cookies en el Firefox:
    - Pulsa ALT para ir al menú
    - Tools > Options > Privacy
       - Firefox will: Use custom settings for history
       - Show cookies
*/

$caducaEnUnaHora = time()+3600;
$caducaEnUnDia = time()+3600*24;
setcookie("ciudad", "Barcelona", $caducaEnUnaHora);

echo "<h1>Se ha guardado la cookie</h1>";
