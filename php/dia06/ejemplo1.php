<?php
  /*
    Ejemplo de uso de los include

    El include es una orden que incluye
    todo el fichero que indique como si
    hicieras un copiar y pegar

    Podemos cargar un fichero PHP, HTML, CSS, JS, TXT

    Con los include se puede crear
    una plantilla para el sitio web.
  */
?>
<?php
  $titulo = "Un anillo";
  $activo = "Uno";
  include "cabeza.php";
?>
<h2>Ejemplo uno</h2>
<p>Bla, bla, bla</p>
<?php include "pie.php" ?>
