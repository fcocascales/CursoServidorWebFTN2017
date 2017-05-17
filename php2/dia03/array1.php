<?php

  // Arrays indexados
  // Para referirte a cada elemento del array
  // se utiliza un número empezando por 0

  $romano = array(
    'I',   // índice 0
    'II',  // índice 1
    'III', // índice 2
    'IV',
    'V',
    'VI',
    'VII',
    'VIII',
    'IX',
    'X',
    'XI',
    'XII', // índice 11
  );

  echo "<h1>Array indexado</h1>";

  echo "<pre>"; // preformato: espacios y saltos linea
  print_r($romano); // print_r y var_dump imprime cualquier variable
  echo "</pre>";

  echo "<h2>Acceder a los elementos de array</h2>";

  echo $romano[7]; // Imprime VIII
  echo "<br>";
  echo $romano[11]; // Imprime XII
  echo "<br>";

  $indice = 0;
  echo $romano[$indice]; // Imprime I
  echo "<br>";

  echo "<h2>count</h2>";
  echo count($romano); // 12
  echo "<br>";

  echo "<h2>for</h2>";
  for ($i=0; $i<count($romano); $i++) {
    echo "Índice $i &rarr; ".$romano[$i]."<br>";
  }

  echo "<h2>foreach</h2>";
  foreach ($romano as $simbolo) {
    echo "$simbolo, ";
  }

  echo "<h2>foreach con índice</h2>";
  foreach ($romano as $indice => $simbolo) {
    echo "$indice &rarr; $simbolo<br>";
  }

  echo "<h2>implode</h2>"; // Implotar (join)
  // Convierte un array en un string
  $texto = implode(";", $romano);
  echo $texto; // "I;II;III;IV;..."

  echo "<h2>explode</h2>"; // Explotar (split)
  // Convierte un string en un array
  $texto = "No por mucho madrugar amanece más temprano";
  $palabras = explode("m", $texto);
  echo implode("<br>", $palabras);


 ?>
