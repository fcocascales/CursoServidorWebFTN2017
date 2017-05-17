<?php

  echo "<h1>Variables vacías</h1>";

  echo "<h2>Una variable: no definida</h2>";
  if (empty($nombre)) echo "La variable nombre está vacía<br>";
  else echo "La variable nombre NO está vacía";

  echo "<h2>Una variable: 0</h2>";
  $numero = 0; // Está vacía
  if (empty($numero)) echo "La variable numero está vacía<br>";
  else echo "La variable numero NO está vacía";

  echo "<h2>Una variable: \"\"</h2>";
  $telefono = ""; // Está vacío
  if (empty($telefono)) echo "La variable telefono está vacía<br>";
  else echo "La variable telefono NO está vacía";

  echo "<h2>Una variable: false</h2>";
  $ok = false; // Esta vacío
  if (empty($ok)) echo "La variable ok está vacía<br>";
  else echo "La variable ok NO está vacía";

  echo "<h2>Una variable: array()</h2>";
  $alumnos = array(); // Esta vacío
  if (empty($alumnos)) echo "La variable alumnos está vacía<br>";
  else echo "La variable alumnos NO está vacía";

  echo "<h2>Una variable: null</h2>";
  $objeto = null; // Esta vacío
  if (empty($objeto)) echo "La variable objeto está vacía<br>";
  else echo "La variable objeto NO está vacía";
