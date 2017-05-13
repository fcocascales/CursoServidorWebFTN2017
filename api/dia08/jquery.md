jQuery
======

[web](http://jquery.com)

jQuery usa el $ para varias tareas:

  1. $(función)
  2. $(selector CSS)     
  3. $.método()

## $(función)

  Ejecuta la función cuando la página web ha sido totalmente cargada.
  Se utiliza para la función principal o de inicio.

  Ejemplo 1 con una función en línea:

      $(function() {
         ...
      });

  Ejemplo 2 con un nombre de función:

      $(main);

      function main() {
        ...
      }

## $(selector CSS)

  Seleccionar elementos de la página web igual que se hace en CSS.

  Ejemplos:

    - $('#principal') - Obtiene el elemento con el id="principal"
    - $('.caja') - Todos los elementos de la clase caja
    - $('#nav li') - Todos los li dentro del id="nav"
    - $('p') - Todos los párrafos

  El resultado es un objeto jQuery con un array de elementos.

### Métodos que se pueden usar la selección:

  - html() - El código HTML interno
  - css() - Estilos CSS: color:red
  - attr() - Atributos de la etiqueta: href="..." src="..."
  - prop() - Atributos sin valor: selected checked
  - addClass(), removeClass() - Añadir una clase css
  - append() - Añadir HTML
  - Eventos: click, change, focus, mouseMove, keyPress, ...

#### html  

Ejemplo html de lectura (getter):

    <div id="principal">
      <p>Hola</p>
    </div>

    var contenido = $('#principal').html()

Ejemplo html de escritura (setter):

    var contenido = '<strong>Barcelona</strong>';
    $('#principal').html(contenido);

    <div id="principal">
      <strong>Barcelona</strong>
    </div>

#### css (es mejor añadir o quitar clases CSS)

De lectura:

    var css = $('#nav').css(); // Array asociativo

De escritura:

    $('#nav').css({
      'background-color':"yellow",
      'color': "red"
    });

    $('#nav').css.backgroundColor = 'yellow';

#### attr (atributo)    

Lectura:
    var enlace = $('#link').attr('href');

Escritura:
    $('#link').attr('href', "http://wikipedia.org");

#### prop (property)

Lectura:
    var ok = $('#aceptar').prop('checked');

Escritura:
    $('#aceptar').prop('checked', true);

#### addClass, removeClass

    $('p').addClass('resaltado');
    $('p').addClass('colapsado');

    <p class="resaltado colapsado">...

    $('p').removeClass('resaltado');

    <p class="colapsado">...

#### Evento click

Ejemplo 1:

    $('#button1').click(function () {
      alert('Click en el botón');
    });

Ejemplo 2:

    $('#button1').click(clickButton1);    

    function clickButton1() {
      alert('Click en el botón');
    }

## $.método()

  - $.each(array, funcion);

    Se comporta como un bucle foreach

  - $.getJSON(url, callback);

    Hace una petición AJAX a un servidor con datos JSON.
