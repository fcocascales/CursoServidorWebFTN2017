<?php
  /*
    Algoritmo:
     - Leer el contenido del fichero visitas
     - Incrementar en una unidad el número
     - Sobrescribir el fichero visitas

    El fichero de visitas debe tener permisos de escritura.
    Al subir el fichero con FileZilla se puede conceder
    permiso de escritura.

    Usar la función 'file_get_contents' para leer el fichero
    Usar la function 'file_put_contents' para escribir el fichero
  */

  $fichero = 'visitas.txt';
  $numero = file_get_contents($fichero);
  $numero = intval($numero) + 1;
  file_put_contents($fichero, $numero);

 ?><!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Contador de visitas</title>
     <style>
        #contador {
          font-family:monospace;
          background-color:#333;
          color:#fff;
          padding:0 0.5em;
          font-weight:bold;
        }
     </style>
   </head>
   <body>
     <h1>Contador de visitas</h1>
     <p>Han visitado está página
       <span id="contador"><?php echo $numero ?></span> veces</p>
     <p>Refresca la página para aumentar
        el número de visitas: Pulsa F5</p>
   </body>
 </html>
