<?php // fichero1.php

/*
  Una variable tiene un nombre y guarda datos
  La variable es volatil, dura mientras se
  ejecuta la página PHP.

  Un fichero tiene un nombre y guarda datos
  Almacena datos de manera permanente en el disco duro.

  En PHP se pueden leer o escribir en ficheros.
  Para poder escribir en un fichero tiene que
  tener asignados permisos de escritura.
*/

$texto = "Hola ficheros";

// Crea un fichero llamado "prueba.txt" en la
//  misma carpeta que este PHP. El contenido
//  del fichero es el texto
file_put_contents("prueba.txt", $texto);

$contenido = file_get_contents("prueba.txt");
echo "prueba.txt<br>$contenido";

?>
