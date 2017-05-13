<?php

  echo "<h1>Tablas</h1>";

  echo "<h2>Array indexado de arrays asociativos</h2>";
  echo "<p>El array indexado son las filas de la tabla</p>";
  echo "<p>El array asociativo son los campos de una fila</p>";

  $clientes = [
    [ 'id'=>1, 'nombre'=>"Pepe", 'cp'=>"08004" ], // primera fila
    [ 'id'=>2, 'nombre'=>"Maria", 'cp'=>"08020" ], // segunda fila
    [ 'id'=>3, 'nombre'=>"Montse", 'cp'=>"08001" ], // tercera fila
    [ 'id'=>4, 'nombre'=>"Joan", 'cp'=>"08010" ] // cuarta fila
  ];

  echo "<pre>"; print_r($clientes); echo "</pre>";
  echo "El nombre de la fila 2: ". $clientes[1]['nombre']." <br> ";
  echo "El CP de la fila 4: {$clientes[3]['cp']} <br>";

  echo "<h2>Array indexado de objetos PHP</h2>";

  $proveedores = [
    (object)[ 'id'=>1, 'nombre'=>"Pepe", 'cp'=>"08004" ], // primera fila
    (object)[ 'id'=>2, 'nombre'=>"Maria", 'cp'=>"08020" ], // segunda fila
    (object)[ 'id'=>3, 'nombre'=>"Montse", 'cp'=>"08001" ], // tercera fila
    (object)[ 'id'=>4, 'nombre'=>"Joan", 'cp'=>"08010" ] // cuarta fila
  ];

  echo "<pre>"; print_r($proveedores); echo "</pre>";

  echo "El nombre de la fila 2: ". $proveedores[1]->nombre." <br> ";
  echo "El CP de la fila 4: {$proveedores[3]->cp} <br>";

 ?>
