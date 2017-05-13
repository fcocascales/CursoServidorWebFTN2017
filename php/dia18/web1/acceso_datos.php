<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Acceso datos</title>
</head>
<body>
<?php
/*
  |curso     |nºalumnos|nºhoras|
  |----------|---------|-------|
  |Mates     | 15      | 40    |
  |Música    | 20      | 120   |
  |Filosofía | 18      | 90    |
  |Gimnasia  | 22      | 60    |
  |Lengua    | 17      | 100   |
*/
  require_once "datos1.php";
  require_once "datos2.php";
  require_once "datos3.php";

  echo "<h1>Ejercicio</h1>";

  echo "<p>En el curso de música hay ahora 18 alumnos</p>";
  $datos1[1][1] = 18;
  $datos2[1]['alumnos'] = 18;
  $datos3[1]->setNumAlumnos(18);

  echo "<p>Aumentar el número de horas de filosofía en 20 horas</p>";
  $datos1[2][2] += 20; // $datos1[2][2] = $datos1[2][2] + 20;
  $datos2[2]['horas'] += 20;
  $datos3[2]->addNumHoras(20);


  echo "<h2>Datos 1</h2>";
  echo "Nombre del curso de gimnasia: ";
  echo $datos1[3][0];
  echo "<br>Nº alumnos del curso de música: ";
  echo $datos1[1][1];
  echo "<br>Nº horas del curso de filosofía: ";
  echo $datos1[2][2];

  echo "<h2>Datos 2</h2>";
  echo "Nombre del curso de gimnasia: ";
  echo $datos2[3]['curso'];
  echo "<br>Nº alumnos del curso de música: ";
  echo $datos2[1]['alumnos'];
  echo "<br>Nº horas del curso de filosofía: ";
  echo $datos2[2]['horas'];

  echo "<h2>Datos 3</h2>";
  echo "Nombre del curso de gimnasia: ";
  echo $datos3[3]->getNombre();
  echo "<br>Nº alumnos del curso de música: ";
  echo $datos3[1]->getNumAlumnos();
  echo "<br>Nº horas del curso de filosofía: ";
  echo $datos3[2]->getNumHoras();

  // Provocar un error
  // Quitar 100 horas al curso de mates cuando sólo tiene 40
  $datos3[0]->addNumHoras(-100);


?>
</body>
</html>
