Ejercicio 1
===========

Crear una página donde aparezcan la lista de los dinosaurios según su dieta.

  - filtro.php
  - resultado.php
  - basedatos.php

## basedatos.php

Este fichero se incluirá en los ficheros "filtro.php" y "resultado.php"  

Tendrá las siguientes funciones:
  - La función **conectar_bd()** que devuelve el objeto $pdo
  - La función **obtener_dietas($pdo)** que devuelve la tabla de las dietas(id, dieta)
  - La función **obtener_dinosaurios($pdo, $dieta_id)** me devuelve la tabla de los dinosaurios(id, nombre, longitud) filtrado por dieta_id

## prueba.php

Probar las funciones creadas en "basedatos.php";  

## filtro.php

Tiene un formulario con
  - un campo **dieta_id** que es un select para elegir la dieta. Para rellenar los option hay que usar la función *obtener_dietas* y un bucle.
  - un botón de enviar

El envío de datos del formulario utilizará el método GET.  
Los datos se enviaran a la página "resultado.php".

## resultado.php

Recuperar el parámetro GET *dieta_id*.

Mostrar una tabla de dinosaurios filtrado por la dieta. Usa la funcion *obtener_dinosaurios* y un bucle.
