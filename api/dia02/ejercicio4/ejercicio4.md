Ejercicio 4
===========

## Enunciado

Dada la siguiente estructura de datos en PHP:

    $factura = array(
      'numero'=> "1001",
      'cliente'=> "ACME, S.A.",
      'fecha'=> "2017-04-24",
      'iva'=> 0.21,
      'detalles'=> array(
        array(
          'producto'=> "Sofá",
          'unidades'=> 1,
          'precio'=> 300
        ),
        array(
          'producto'=> "Silla",
          'unidades'=> 4,
          'precio'=> 39
        )
      )      
    );

Crea los siguientes ficheros:

  - **factura.php** con la estructura de datos arriba descrita
  - **factura1.xml** formato XML con sólo etiquetas
  - **factura2.xml** formato XML con etiquetas y atributos
  - **factura.json** formato JSON
  - **factura.json.php** convertir a JSON mediante la función *json_encode*
  - **factura1.xml.php** convertir a XML mediante *echo* y *foreach*
  - **factura2.xml.php** convertir a XML mediante la clase *SimpleXMLElement*
