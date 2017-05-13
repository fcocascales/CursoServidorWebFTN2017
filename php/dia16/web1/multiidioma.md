Una web en varios idiomas
=========================

Uso de las funciones [GetText](http://php.net/manual/es/book.gettext.php) en PHP.

Conceptos relacionados con el multiidioma:

  - **L10n** - Localization
  - **I18n** - Internationalization

El programa [POEdit](https://poedit.net/) es el idóneo para realizar las traducciones.

Uno de los idiomas de la web será el idioma **base**. Habitualmente suele ser el *inglés*. El idioma base es el que se usa en las páginas PHP y será el idioma predeterminado.

**Importante**: Los idiomas a los que se tenga que traducir deben instalarse en el servidor web. Si el servidor es un Ubuntu Linux, la orden a introducir para catalán es:

    sudo apt-get install language-pack-ca-base    

Pasos a seguir
--------------

  1. Crear las páginas PHP.
  2. Crear la estructura de carpetas.
  3. Crear los ficheros de traducción con poedit.
  4. Implementar algún sistema para cambiar de idioma.


## 1) Crear las páginas PHP

Usar la función gettext o su alias subrayado para realizar las traducciones usando el idioma base.

      echo gettext('Hola');
      echo _ ('Hola');

## 2) Crear la estructura de carpetas

es|ca|en = Código del idioma<br>
ES|US = Código del país

  - locale
    - es_ES
      - LC_MESSAGES
        - messages.po
        - messages.mo
    - ca_ES
      - LC_MESSAGES
        - messages.po
        - messages.mo
    - en_US
      - LC_MESSAGES
        - messages.po
        - messages.mo

El fichero .po es el texto a traducir
El fichero .mo es la compilación en binario del .po
A veces puede hacer falta reiniciar el Apache para que tenga en cuenta la nueva traducción.

## 3) Crear los ficheros de traducción con poedit.

  1. Arrancar el poedit
  2. Archivo -> Nuevo y elegir el idioma.
  3. Guardar el archivo como:
      web1/locale/ca_ES/LC_MESSAGES/messages.po
  4. Pulsar "Extraer desde código fuente"
    - Ruta de fuentes -> Pulsar el [+] y añadir la carpeta raíz de la web.
    - Propiedades de traducción -> Conjunto de caracteres del código fuente = UTF-8
  5. Pulsa ACEPTAR y empieza a traducir.

Para realizar traducciones de nuevos textos:

  1. Abrir el fichero .po
  2. Darle al botón [Actualizar]
  3. Empezar a traducir

## 4) Implementar algún sistema para cambiar de idioma.

  1. Descargar el fichero [locale.php]( http://proinf.net/articles/multiidioma/locale.php.7z) y descomprimirlo en la raíz del sitio.
  2. Añadir el siguiente código al inicio de la página:

    <?php
      require_once "locale.php";
      Locale::set();
    ?>
