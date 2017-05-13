Ejercicio 9
===========

Se trata de obtener los últimos artículos de un blog.
Para ello hay que usar el **feed** o **rss** o **sindicación** del blog.

El *feed* es un fichero XML con la siguiente estructura:

  - rss
    - channel
      - title = Nombre del blog
      - description = Descripción del blog
      - item (array)
          - title = Título de un artículo
          - link = Enlace al artículo
          - pubDate = Fecha de publicación del artículo
          - description = Texto introductorio del artículo

## Blogs

  - [Creadictos](http://www.creadictos.com/feed/)
  - [LineaDeCódigo](http://lineadecodigo.com/feed/)
  - [LaWebera.es](http://feeds.feedburner.com/laweberaes?format=xml)
  - [MedulaPagana](http://medulapagana.blogspot.es/rss2.xml)
  - [ElPeriodico](http://www.elperiodico.com/es/rss/ciencia/rss.xml)

## Ejercicio

Crea el archivo **blogs.php**.
Almacena los blogs en un array asociativo.
Realiza un desplegable para elegir el blog.
Muestra los artículos del blog seleccionado con el siguiente formato:

```html
    <h1>Nombre del blog</h1>
    <p>Descripción del blog</p>
    <div class="articulo">
      <h2><a href="enlace al artículo">Título del artículo</a></h2>
      <p class="fecha">Fecha de publicación del artículo</p>
      <div class="texto">Descripción del artículo</div>
    <div>
    ...
```
