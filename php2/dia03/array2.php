<?php

  /*
    array2.php

    Ejercicio:

    Crea un array de alumnos:
      Alberto, Bea, Carlos, Daniel, Emilio,
      Fernanda, Gema, Hortensia, Ismael, Javier

    1) Mostrar el elemento con índice 6
    2) Mostrar el elemento con índice 3
    3) Mostrar el número de alumnos que hay
    4) Mostrar el último elemento
    5) Con un bucle for mostrar los índices y los
       nombres de los alumnos
    6) Con un bucle foreach mostrar los nombres de alumnos
    7) Con la función implode mostrar los alumnos separados
       por coma
    8) Con la función implode mostrar los alumnos separados
       por <br>
    9) Mostrar el array con la función print_r
    10) Mostrar el array con la función var_dump
    11) Cambiar el nombre de "Fernanda" por "Fátima"
    12) Añadir al final otro alumno: "Karl"
    13) Quitar el primer elemento del array: "Alberto"

  */

  $alumnos = array("Alberto", "Bea", "Carlos", "Daniel", "Emilio",
  "Fernanda", "Gema", "Hortensia", "Ismael", "Javier");

  echo "<h2>1) Mostrar el elemento con índice 6  </h2>";
  echo $alumnos[6]; // Gema

  echo "<h2>2) Mostrar el elemento con índice 3</h2>";
  echo $alumnos[3]; // Daniel

  echo "<h2>3) Mostrar el número de alumnos que hay</h2>";
  echo count($alumnos); // 10

  echo "<h2>4) Mostrar el último elemento</h2>";
  echo $alumnos[count($alumnos)-1]; // Javier

  echo "<h2>5) Con un bucle for mostrar los índices y los nombres de los alumnos</h2>";
  for ($i = 0; $i < count($alumnos); $i++) {
    echo $i . " : " . $alumnos[$i] . "<br>";
  }

  echo "<h2>6) Con un bucle foreach mostrar los nombres de alumnos</h2>";
  foreach ($alumnos as $nombre) {
    echo $nombre . "<br>";
  }
  foreach ($alumnos as $index => $nombre) {
    echo $index . " : " . $nombre . "<br>";
  }

  echo "<h2>7) Con la función implode mostrar los alumnos separados por coma</h2>";
  echo implode(", ", $alumnos);

  echo "<h2>8) Con la función implode mostrar los alumnos separados por &lt;br&gt;</h2>";
  echo implode("<br>", $alumnos);

  echo "<h2>9) Mostrar el array con la función print_r</h2>";
  echo "<pre>"; // Preformato: Mostrar espacios en blanco y saltos de líneas
  print_r($alumnos);
  echo "</pre>";

  echo "<h2>10) Mostrar el array con la función var_dump</h2>";
  echo "<pre>";
  var_dump($alumnos);
  echo "</pre>";

  echo "<h2>11) Cambiar el nombre de \"Fernanda\" por \"Fátima\"</h2>";
  $index = array_search("Fernanda", $alumnos);
  $alumnos[$index] = "Fátima";
  echo $index . " : " . $alumnos[$index]; // Fátima

  echo "<h2>12) Añadir al final otro alumno: \"Karl\"</h2>";
  array_push($alumnos, "Karl");
  $alumnos[] = "Karl";
  echo implode(", ", $alumnos);

  echo "<h2>13) Quitar el primer elemento del array: \"Alberto\"</h2>";
  $primero = array_shift($alumnos); // $primero == "Alberto"
  echo implode(", ", $alumnos);
?>
