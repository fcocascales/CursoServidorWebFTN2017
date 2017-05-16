<?php
  // funciones.php

  // 'aaaa-mm-dd' => 'dd-mm-aaaa'
  function formato_fecha($fechaSQL) {
    $items = explode('-', $fechaSQL); // Un array con [año, mes, día]
    $items = array_reverse($items); // Invierte el array: [día, mes, año]
    return implode('-', $items); // Devolver el array en un texto
  }
