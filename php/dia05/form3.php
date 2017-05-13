<?php
  /*
    EJERCICIO:
    Realizar un formulario que contenga:
    - Un campo para introducir el nombre
    - Una lista de 5 poblaciones (usar el <select>)
    - Un botón de enviar
    Los datos de las poblaciones deben proceder
    de un array indexado.
    El nombre y la población seleccionados se deben
    mostrar en un párrafo.
    Hay que validar que la población enviada
    coincida con alguna del array.
    Hay que validar el campo nombre eliminando
    etiquetas <> y limitando la longitud a 50 caracteres.
    Buscar en php.net las funciones de string o array que
    se necesiten.
  */

  // Array indexado de poblaciones
  $poblaciones = array(
    'Martorell', 'Granollers', 'Sabadell',
    'Terrassa', 'Mataró',
  );
  sort($poblaciones);

  // Recuperar los datos enviados en el formulario
  $nombre = isset($_GET['nombre'])? $_GET['nombre'] : '';
  $poblacion = isset($_GET['poblacion'])? $_GET['poblacion'] : '';

  // Sanear el nombre
  $nombre = strip_tags($nombre); // Quitar etiquetas HTML
  $nombre = substr($nombre, 0, 50); // Límita la longitud

  // Validar la población
  if ( ! in_array($poblacion, $poblaciones)) {
    $poblacion = '';
  }

  // A partir de este punto las variables nombre y poblacion
  // tienen un valor correcto

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form 3</title>
  </head>
  <body>
    <h1>Form 3</h1>
    <form action="" method="get">
      <input type="text" name="nombre"
         maxlength="50" placeholder="Introduce tu nombre" />
      <label for="poblacion">Población:</label>
      <select id="poblacion" name="poblacion">
        <option></option>
        <?php
          foreach ($poblaciones as $opcion):
            echo "<option>$opcion</option>";
          endforeach;
        ?>
      </select>
      <input type="submit" value="Enviar" />
    </form>
    <?php if(!empty($nombre) && !empty($poblacion)): ?>
      <h2>Datos enviados</h2>
      <p>El nombre es <strong><?php echo htmlspecialchars($nombre) ?></strong></p>
      <p>La población es <strong><?php echo $poblacion ?></strong></p>
    <?php endif; ?>
  </body>
</html>
