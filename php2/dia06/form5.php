<?php
  /*
    Formulario para cambiar el color de
     fondo de la página:

     - Usar estilos CSS
     - <select> con value y text
     - Usar el método post (en vez del método get)
     - Debe tener al menos un botón submit
     - El action no lo vamos a poner.
       De forma predeterminada se envía a la misma página.

     Proceso:
      1. La página se carga la primera vez
      2. Escribir algo en el formulario
      3. Pulsar el botón de enviar
      4. Recibiendo los datos escritos en el formulario y
         la página se vuelve a cargar en el navegador
      5. Ir al paso 2

  */

  if (isset($_POST['color'])) { // Preguntar si se envió el dato
    $color = strip_tags($_POST['color']); // Recibo el dato envíado por el form
  } else {
    $color = '#ccc'; // gris
  }

 ?><!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <title>Cambiar color</title>
   <style media="screen">
     /* Estilos CSS */
     body {
       background-color: <?php echo $color ?>;
       font-family: sans-serif;
       margin: 2em;
     }
     h1 {
       color: darkred;
       border-bottom: 2px orange solid;
     }
   </style>
 </head>
 <body>
   <h1>Cambiar el color de fondo de la página</h1>

   <form method="post">
     <label for="color">Elige el color:</label>
     <select id="color" name="color">
       <option></option>
       <option value="#fff">Blanco</option>
       <option value="#f00">Rojo</option>
       <option value="#0f0">Verde lima</option>
       <option value="#00f">Azul</option>
       <option value="#ff0">Amarillo</option>
       <option value="#0ff">Cian</option>
       <option value="#f0f">Fucsia</option>
       <option value="#000">Negro</option>
     </select>
     <button>Cambiar el color</button>
   </form>

 </body>
</html>
