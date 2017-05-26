<?php // backend/lib/gestor_contenidos.php

  function imprimirTablaGestorContenidos($tabla) {
    if (empty($tabla)) {
      echo "<div><p>No hay datos</p></div>";
    }
    echo '<table>';
    $first = true;
    foreach ($tabla as $row) {
      if ($first) { // Imprime el encabezado de la tabla
        $first = false;
        echo "<thead><tr>";
        foreach ($row as $key=>$value) {
          echo '<th>'.htmlspecialchars($key).'</th>';
        }
        echo "<th>comandos</th>";
        echo "</tr></thead><tbody>";
      }
      echo '<tr>'; // Imprime las filas de datos
      foreach ($row as $value) {
        echo '<td>'.htmlspecialchars($value).'</td>';
      }
      echo "<td>"; // Imprimir los enlaces del gestor
      echo "<a href=\"modificar.php?id=$row[id]\" title=\"Modificar\">";
      echo "<i class=\"fa fa-pencil-square-o\"></i></a> ";
      echo "<a href=\"borrar.php?id=$row[id]\" title=\"Borrar\">";
      echo "<i class=\"fa fa-times\"></i>";
      echo '</td></tr>';
    }
    echo '</tbody></table>';
  }
