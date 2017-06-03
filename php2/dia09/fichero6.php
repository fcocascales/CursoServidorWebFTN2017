<?php // dia09/fichero6.php_check_syntax

/*
  Obtener una página web de Internet
  con la función "file_get_contents"
  e imprimirla

  La página se muestra pero sin los
  recursos indicados con ruta relativa:
   - imágenes
   - hojas de estilo CSS
   - código Javascript

  Los enlaces absolutos funcionan pero
  no los enlaces relativos
*/

$web = "http://elperiodico.es";
$html = file_get_contents($web);
echo $html;

/*
  Tipos de enlaces:

    Enlaces relativos a la página actual:
      <a href="productos.php">Productos</a>
      <a href="../index.php">Inicio</a>
      <a href=".">Página</a>
      <a href="img/venecia.jpg">Foto</a>
      <a href="..">Ejercicio</a>

    Enlaces respecto a la raíz del sitio actual:
      <a href="/publico/categorias.php">Categorías</a>
      <a href="/index.php">Raíz</a>
      <a href="/">Raíz</a>
      <a href="/php2">Ejercicios</a>

    Enlaces a otros sitios web:
      <a href="http://google.com">Buscador</a>
      <a href="//www.wikipedia.org">Enciclopedia</a>
      <a href="//dominio.es/carpeta/fichero.html">Fichero</a>

    Enlaces dentro de la propia página (no se recarga):
    Va a la etiqueta que tenga es id.
      <a href="#tema2">Tema2</a>
      <a href="#tdc">Tabla de contenidos</a>
*/
