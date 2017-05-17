<?php
  /*
    Array indexado de arrays asociativos.
    Se parece a una tabla de una BD.
  */
  $clientes = array( // Un array indexado con 5 arrays asociativos
    array('id'=>1,  'nombre'=>"Pepe",   'cp'=>"08020"), // Primer cliente
    array('id'=>3,  'nombre'=>"Ana",    'cp'=>"08001"), // Segundo cliente
    array('id'=>5,  'nombre'=>"Montse", 'cp'=>"08004"), // etc.
    array('id'=>7,  'nombre'=>"Carlos", 'cp'=>"08010"),
    array('id'=>11, 'nombre'=>"Bea",    'cp'=>"08022"),
  );

  echo "<h1>Tabla clientes</h1>";
  echo "<pre>";
  print_r($clientes);
  echo "</pre>";

  echo "<h2>Mostrar el cliente Ana</h2>";
  echo "<pre>";
  print_r($clientes[1]); // array('id'=>3, 'nombre'=>"Ana", 'cp'=>"08001")
  echo "</pre>";

  echo "<h2>Mostrar el nombre del cliente Ana</h2>";
  echo $clientes[1]['nombre']; // El nombre de la fila 1 de clientes

  echo "<h2>Un bucle foreach que lo imprima todo</h2>";
  foreach ($clientes as $fila) {
    echo "<h3>" . $fila['nombre'] . "</h3>";
    echo "<p>id=" . $fila['id'] . "</p>";
    echo "<p>cp=" . $fila['cp'] . "</p>";
  }

  echo "<h2>Un bucle foreach que lo imprima en lista</h2>";
  echo "<ul>";
  foreach ($clientes as $fila) {
    echo "<li><strong>$fila[nombre]</strong><br>id=$fila[id]<br>cp=$fila[cp]</li>";
  }
  echo "</ul>";
