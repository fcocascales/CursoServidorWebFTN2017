API (Application Programming Interface)
=======================================

Interfaz de programación de aplicación.
Se puede implementar mediante una:

  - Biblioteca de funciones
  - Biblioteca de clases

Una aplicación web distribuida sería acceder a un servicio mediante un API vía web.

Ejemplo: [API de Google Maps](https://developers.google.com/maps/)

## Datos

Cuando se utiliza un servicio hay que intercambiar datos. Los formatos más habituales de datos son: XML y JSON.

Los dos formatos son ficheros de textos donde hay datos organizados en forma de árbol.

## XML - Extensible Markup Language

Lenguaje de marcas extensible. Es como un HTML inventado.
Tiene un encabezado <?xml ?>. Tiene una sola etiqueta raíz. Las etiquetas tienen que estar incluidas unas dentro de otras.
Las etiquetas pueden tener atributos.

Ejemplo: Una agenda.

    <?xml version="1.0" encoding="UTF-8"?>
    <agenda>
      <contacto id="101">
        <nombre>Pepe</nombre>
        <telefono>123-45-56</telefono>
      </contacto>
      <contacto id="102">
        <nombre>Juana</nombre>
        <telefono>456-78-90</telefono>
      </contacto>
    </agenda>

[agenda.xml](../../../api/dia01/agenda/agenda.xml)

## JSON - Javascript Object Notation

Notación de objetos Javascript. Los arrays indexados de Javascript se hacen con corchete. Los hash de Javascript son arrays asociativos y se hacen con llaves.

    [
       { "id":101, "nombre":"Pepe", "telefono":"123-45-56" },
       { "id":102, "nombre":"Juana", "telefono":"456-78-90" }
    ]

[agenda.json](../../../api/dia01/agenda/agenda.json)

## CSV - Comma-separated Values

Valores separados por coma. Datos de una tabla en modo texto. Muy usado en base de datos y hojas de cálculo.

    id;nombre;telefono
    101;"Pepe";"123-45-56"
    102;"Juana";"456-78-90"

[agenda.csv](../../../api/dia01/agenda/agenda.csv)    

## YAML - Yet Another Markup Language

Otro lenguaje de marcado más.

    Contacto:
      Id: 101
      Nombre: Pepe
      Telefono: 123-45-56
    Contacto:
      Id: 102
      Nombre: Juana
      Telefono: 456-78-90

[agenda.yaml](../../../api/dia01/agenda/agenda.yaml)      
