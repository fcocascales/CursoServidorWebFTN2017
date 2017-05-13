<?php


  $pdo = new PDO('mysql:host=localhost;dbname=bdacme', 'bdacme', 'bdacme'); 
  $pdo->exec("SET CHARACTER SET utf8"); 
    
  $nivel = "";
  $tema = "";  
  $niveles = obtenerNiveles($pdo);   
  $temas = array();
  $palabras = array();
  
  if (!empty($_GET['nivel'])) {
    $nivel = $_GET['nivel'];
    $temas = obtenerTemas($pdo, $nivel);    
    if (!empty($_GET['tema'])) {
      $tema = $_GET['tema'];
      $palabras = obtenerPalabras($pdo, $nivel, $tema);
    }
  }   
  
  function obtenerNiveles($pdo) {
    $sql = "SELECT DISTINCT nivel FROM palabras ORDER BY 1";
    $niveles = $pdo->query($sql)->fetchAll(PDO::FETCH_COLUMN);
    return $niveles;
  }
  
  function obtenerTemas($pdo, $nivel) {
    $sql = "SELECT DISTINCT tema FROM palabras WHERE nivel = ? ORDER BY 1";
    $orden = $pdo->prepare($sql);
    $orden->execute(array($nivel));
    $temas = $orden->fetchAll(PDO::FETCH_COLUMN);
    return $temas;
  }
  
  function obtenerPalabras($pdo, $nivel, $tema) {
    $sql = "SELECT palabra FROM palabras WHERE nivel = ? AND tema = ? ORDER BY 1";
    $orden = $pdo->prepare($sql);
    $orden->execute(array($nivel, $tema));
    $palabras = $orden->fetchAll(PDO::FETCH_COLUMN);
    return $palabras;
  }
  
  function etiquetarArray($etiqueta, $array, $actual) {
    if (empty($array)) return '';
    $etiquetas = "<$etiqueta>". 
      implode("</$etiqueta><$etiqueta>", $array).
      "</$etiqueta>";
    $etiquetas = str_replace(
      "<$etiqueta>$actual</$etiqueta>", 
      "<$etiqueta selected>$actual</$etiqueta>", 
      $etiquetas);
    return $etiquetas;
  }
      
  
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Sin AJAX</title>
</head>
<body>
  <h1>Sin AJAX</h1>
  
  <form action="sin-ajax.php" method="GET">  
    <p>
      <label for="nivel">Nivel:</label>
      <select id="nivel" name="nivel">
        <option></option>
        <?php echo etiquetarArray('option', $niveles, $nivel); ?>
      </select>
      <input type="submit" value="Filtrar" />
    </p>    
    <p>
      <label for="tema">Tema:</label>
      <select id="tema" name="tema">
        <option></option>
        <?php echo etiquetarArray('option', $temas, $tema); ?>
      </select>    
      <input type="submit" value="Filtrar" />      
    </p>  
  </form>
  
  <h2>Palabras:</h2>
  <ol id="palabras">
    <?php echo etiquetarArray('li', $palabras, ''); ?>
  </ol>
  
  <p><a href="index.html">Volver al índice</a></p>
  
</body>
</html>