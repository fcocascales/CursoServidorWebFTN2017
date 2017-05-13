<?php
  // Inicializar las variables
  $ruta = "http://localhost/api/dia06/ejercicio12"; // Servidor JSON
  $continentes = array(); // Lista de continentes
  $idcont = 0; // identificador del continente
  $paises = array(); // Lista de países de un continente
  $idpais = 0; // identificador del país
  $detalles = array(); // datos de un país

  // Leer los datos enviados en el formulario
  if (isset($_GET['idcont'])) $idcont = intval($_GET['idcont']);
  if (isset($_GET['idpais'])) $idpais = intval($_GET['idpais']);

  // JSON continentes
  $json = file_get_contents("$ruta/continentes.json.php");
  $continentes = json_decode($json, $assoc=true);
  ////echo '<pre>Continentes<br>'; print_r($continentes);

  // JSON países por continente
  if (!empty($idcont)) {
    $json = file_get_contents("$ruta/paises.json.php?continente_id=$idcont");
    $paises = json_decode($json, $assoc=true);
    ////echo '<pre>Países<br>'; print_r($paises);
  }

  // JSON de los datos detallados de un país
  if (!empty($idpais)) {
    $json = file_get_contents("$ruta/pais.json.php?id=$idpais");
    $detalles = json_decode($json, $assoc=true);
    ////echo '<pre>Detalles<br>'; print_r($detalles);
  }

  function imprimirContinentes($continentes, $idcont) {
    foreach($continentes as $cont) {
      $selected = $cont['id']==$idcont? " selected":"";
      echo "<option$selected value=\"$cont[id]\">";
      echo htmlspecialchars($cont['nombre']);
      echo "</option>\n";
    }
  }
  function imprimirPaises($paises, $idpais) {
    foreach($paises as $pais) {
      $selected = $pais['id']==$idpais? " selected":"";
      echo "<option$selected value=\"$pais[id]\">";
      echo htmlspecialchars($pais['nombre']);
      echo "</option>\n";
    }
  }
  /*function imprimirOpciones($lista, $idpredeterminado) {
    foreach($lista as $item) {
      $selected = $item['id']==$idpredeterminado? " selected":"";
      echo "<option$selected value=\"$item[id]\">";
      echo htmlspecialchars($item['nombre']);
      echo "</option>\n";
    }
  }*/

  function imprimirDetalles($pais) {
    if (!empty($pais)) {
      echo "<h1>".htmlspecialchars($pais['nombre'])."</h1>";
      echo "<p>Capital: ";
      echo "<strong>".htmlspecialchars($pais['capital'])."</strong></p>";
      echo "<p>Moneda: ";
      echo "<strong>".htmlspecialchars($pais['moneda'])."</strong></p>";
      echo "<p>Continente: ";
      echo "<strong>".htmlspecialchars($pais['continente'])."</strong></p>";
      echo "<p>Población: ";
      echo "<strong>".$pais['poblacion']."</strong> habitantes</p>";
      echo "<p>Extensión: ";
      echo "<strong>".$pais['extension']."</strong> km<sup>2</sup></p>";
    }
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ficha del país</title>
</head>
<body>
  <h1>Ficha del país</h1>
  <form method="get">

    <label for="idcont">Continente:</label>
    <select name="idcont" id="idcont">
      <option></option>
      <?php imprimirContinentes($continentes, $idcont); ?>
    </select>
    <button>Enviar</button>

    <label for="idpais">País:</label>
    <select name="idpais" id="idpais">
      <option></option>
      <?php imprimirPaises($paises, $idpais); ?>
    </select>
    <button>Enviar</button>

  </form>

  <?php imprimirDetalles($detalles) ?>

</body>
</html>
