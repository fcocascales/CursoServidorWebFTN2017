<?php

  $capital = "Roma";
  $pais = "Italia";
  $moneda = "euro";
  $poblacion = 61000000;

  /*
    Generar código HTML a partir de las variables.

    - La primera línea debe ser un título <h1>
    - Las 3 últimas líneas es un párrafo <p>
      usar <br> para el salto de línea
    - El valor de las 3 últimas variables
      debe salir en negrita <strong>
  */
  /*
    Datos de Italia
    Capital: Roma
    Moneda: euro
    Población: 61000000 hab.
  */
  echo "<h1>Datos de $pais</h1>";
  echo "<p>Capital: <strong>$capital</strong><br>";
  echo "Moneda: <strong>$moneda</strong><br>";
  echo "Población: <strong>$poblacion</strong></p>";
  /*
    <h1>Datos de Italia</h1>
    <p>Capital: <strong>Roma</strong><br>
    Moneda: <strong>euro</strong><br>
    Población: <strong>61000000</strong> hab.</p>
  */
  // Mirar el código fuente de la página
