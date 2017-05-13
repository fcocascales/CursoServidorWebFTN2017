Markdown
========

Son ficheros de texto con extensión .md
Es un sustituto de un fichero *HTML*.
Los ficheros **Markdown** se puede convertir a páginas HTML.
Es más fácil escribir en Markdown que en HTML.

Manual de Markdown
------------------

###Listado

 - **H1** Doble subrayado o anteponiendo un #
 - **H2** Simple subrayado o con ##
 - **H3** Anteponer 3 almohadillas ###
 - **P** Párrafo separado con una línea en blanco.
 - **EM** Énfasis: texto entre asteríscos *
     o guion bajo
 - **STRONG** texto entre dobles asteríscos
      o dobles guiones bajos
 - **LI** Cada línea empezando por un guión, o un asterisco, o un más o un número y punto.
 - **A** Texto entre corchetes y enlace entre paréntesis.
 - **PRE** Empezar con doble tabulador

Descargar código PHP
--------------------

Código: [Parsedown.org](http://parsedown.org/)

```php
<?php
require_once "../parsedown-master/Parsedown.php";
$text = file_get_contents("markdown.md");
$md = new Parsedown();
echo $md->text($text);
```
