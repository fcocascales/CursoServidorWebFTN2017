<?php

  echo "<h1>Arrays</h1>";

  echo "<h2>Arrays indexados</h2>";

  $primos = array(2, 3, 5, 7, 11, 13, 17, 23, 29);
  $semana = array('lun','mar','mié','jue','vie','sáb','dom');
  $meses = [ 'ene', 'feb', 'mar', 'abr', 'may', 'jun',
             'jul', 'ago', 'sep', 'oct', 'nov', 'dic' ];

  echo "<pre>"; print_r($semana); echo "</pre>";

  echo "El 5º número primo es $primos[4] <br>";
  echo "El 3er día de la semana es $semana[2] <br>";
  echo "El 5º mes es $meses[4] <br>";

  echo "<h2>Arrays asociativos</h2>";

  $idiomas = array(
    'ca'=> "Català",
    'en'=> "English",
    'es'=> "Español",
    'it'=> "Italiano",
  );

  echo "<pre>"; print_r($idiomas); echo "</pre>";

  echo "El idioma en es $idiomas[en] <br>";
  echo "El idioma ca es ".$idiomas['ca']." <br>";
  $lang = 'es';
  echo "El idioma $lang es $idiomas[$lang] <br>";

  $codigos = [
    '200'=> "OK",
    '300'=> "Redirect",
    '404'=> "Not found",
    '500'=> "Server error",
  ];

  echo "El código 200 significa $codigos[200] <br>";

  echo "<h2>Objetos PHP</h2>";

  $agenda = (object)[
    'pepe'=> "123-45-67",
    'maria'=> "890-12-34",
    'joan'=> "567-89-01",
    'montse'=> "234-56-78",
  ];

  echo "El teléfono de Pepe es $agenda->pepe <br>";

  echo "<pre>"; print_r($agenda); echo "</pre>";





 ?>
