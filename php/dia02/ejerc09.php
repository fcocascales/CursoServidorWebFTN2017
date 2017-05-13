<?php

  // $t = $_GET['tabla'];

  if (isset($_GET['tabla'])) {
    $t = intval($_GET['tabla']);
  }
  else {
    $t = 0;
  }

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ejercicio 9</title>
<style>
  li { display:inline; }
</style>
</head>
<body>
<h1>Ejercicio 9</h1>
<p>Mostrar la tabla de multiplicar</p>
<?php
  for ($i=1; $i<=10; $i++) {
    $resultado = $i * $t;
    echo "$i &times; $t = $resultado<br>";
  }
?>
<ul>
  <?php
    for ($i=0; $i<=10; $i++) {
      echo "<li><a href=\"?tabla=$i\">$i</a></li>\n";
      //echo '<li><a href="?tabla='.$i.'">'.$i.'</a></li>';
    }
  ?>
</ul>

</body>
</html>
