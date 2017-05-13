<?php

$pdo = new PDO('mysql:host=localhost;dbname=bd_mesozoico', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("SET CHARACTER SET UTF8");

//ejemplo0($pdo);
//ejemplo1($pdo);
//ejemplo2($pdo);
//ejemplo3($pdo);
ejemplo4($pdo);

function ejemplo0($pdo) {
  $tabla = $pdo->query("SELECT * FROM dinosaurios");
  foreach($tabla as $row) {
    echo htmlspecialchars($row['nombre']);
    echo " ";
    echo $row['longitud'];
    echo "<br>";
  }
}

function ejemplo1($pdo) {
  $tabla = $pdo->query("SELECT * FROM dinosaurios");
  while ($row = $tabla->fetch()) {
    echo htmlspecialchars($row['nombre']);
    echo " ";
    echo $row['longitud'];
    echo "<br>";
  }
}

function ejemplo2($pdo) {
  $tabla = $pdo->query("SELECT * FROM dinosaurios");
  while (($row = $tabla->fetch()) !== false) {
    echo htmlspecialchars($row['nombre']);
    echo " ";
    echo $row['longitud'];
    echo "<br>";
  }
}


// $row == false  // Puede ser: false, "", 0, null,
// $row === false // false
//
function ejemplo3($pdo) {
  $tabla = $pdo->query("SELECT * FROM dinosaurios");
  while (true) {
    $row = $tabla->fetch();
    if ($row === false) break;
    echo htmlspecialchars($row['nombre']);
    echo " ";
    echo $row['longitud'];
    echo "<br>";
  }
}

function ejemplo4($pdo) {
  $tabla = $pdo->query("SELECT * FROM dinosaurios");
  for ($row = $tabla->fetch(); $row !== false; $row = $tabla->fetch()) {
    echo htmlspecialchars($row['nombre']);
    echo " ";
    echo $row['longitud'];
    echo "<br>";
  }
}
