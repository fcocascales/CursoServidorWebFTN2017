<?php

  function areaTriangulo($base, $altura) {
    $area = ($base * $altura) / 2;
    return $area;
  }

  function longitudCirculo($radio) {
    $longitud = 2 * M_PI * $radio;
    return $longitud;
  }

  echo "<h2>Área de un triángulo de base 10 y altura 4</h2>";
  echo areaTriangulo(10, 4); // 20

  echo "<h2>Longitud de un círculo de radio 5</h2>";
  echo longitudCirculo(5);
