<?php
  /*
    COOKIES (galletas)

    Es un fichero de datos que el servidor web
    almacena en el ordenador cliente.

    Un servidor web sólo puede acceder a sus
    propias cookies. No puede acceder las cookies
    de otros servidores.

    Las cookies tienen una caducidad.

    Cada navegador web gestiona sus propias cookies.
  */

  // FUNCIONES ----------------------------------

  /**
   *  Da una lista de los colores en un array asociativo.
   *  La clave es el nombre del color y el valor es el
   *  código CSS del color.
   */
  function listaColores() {
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
    return $colores;
  }

  /**
   *  Recupera el código del color CSS a partir del parámetro GET
   *  Si no existe da por omisión gris.
   */
  function obtenerColor($colores) {
    // Recuperar el dato enviado
    $color = isset($_POST['color'])? $_POST['color'] : '';
    // Validación del color
    if ( ! in_array($color, $colores)) {
      $color = '#CCC';
    }
    return $color;
  }

  /**
   * Imprime las opciones de un <select> para elegir el color
   */
  function imprimirOpcionesColor() {
    global $colores, $color;
    foreach ($colores as $nombre => $rgb) {
      $selected = $color==$rgb? 'selected' : '';
      echo "<option $selected value=\"$rgb\">$nombre</option>";
    }
  }

  /**
   * Lee el código del color CSS almacenado en el cliente
   * Si no existe la cookie da ""
   */
  function obtenerCookie() {
    if (isset($_COOKIE['color']))
      return $_COOKIE['color'];
    else
      return '#CCC';
  }

  /**
   * Almacena el color CSS en una cookie del cliente
   */
  function escribirCookie($color) {
    $dias = 30;
    $segundos = time()+$dias*24*60*60;
    setcookie('color', $color, $segundos);
  }

  // PROGRAMA PRINCIPAL -------------------------

  $colores = listaColores();

  if (empty($_POST)) { // Es la primera vez en esta página
    $color = obtenerCookie(); // Recordar el color
  }
  else { // El formulario ya ha sido enviado
    $color = obtenerColor($colores);
    escribirCookie($color); // Memorizar el color
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
   <form action="" method="post">
     <select name="color">
       <?php imprimirOpcionesColor(); ?>
     </select>
     <button type="submit">Enviar</button>
   </form>
 </body>
</html>
