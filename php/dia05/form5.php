<?php
  /*
    EJERCICIO FORMULARIO Y COLORES:

    Crear un array asociativo de colores:
    - la clave es el color y
    - el valor es el código CSS del color.

    El formulario tendrá un SELECT con la lista de colores.
    Al recibir los datos del formulario la página debe
    aparecer con el color de fondo elegido.
  */

  $colores = array(
    'rojo'=> '#F00',
    'verde'=> '#0F0',
    'azul'=> '#00F',
    'naranja'=> 'orange',
    'lavanda'=> 'lavender',
    'rosa'=> 'pink',
    'amarillo'=> 'rgba(255,255,0,1)',
  );
  ksort($colores); // Ordenado por clave

  // Recuperar el dato enviado
  $color = isset($_GET['color'])? $_GET['color'] : '';

  // Validación del color
  if ( ! in_array($color, $colores)) {
    $color = '#CCC';
  }

 ?><!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Form 5</title>
     <style>
       body { background-color:<?php echo $color ?>; }
     </style>
   </head>
   <body>
     <h1>Formulario de colores</h1>
     <form action="" method="get">
       <select name="color">
         <?php
            foreach ($colores as $nombre => $rgb) {
              $selected = $color==$rgb? 'selected' : '';
              echo "<option $selected value=\"$rgb\">$nombre</option>";
            }
         ?>
       </select>
       <button type="submit">Enviar</button>
     </form>
   </body>
 </html>
