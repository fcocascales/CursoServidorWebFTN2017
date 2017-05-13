<?php
  /* 
    Servidor AJAX que retorna JSON
  
    Uso: 
      servidor.php  -> Niveles: ["alfa","beta","gamma"]
      servidor.php?nivel=alfa  -> Temas: ["calle","cocina","gimnasio"]
      servidor.php?nivel=alfa&tema=cocina -> Palabras: ["cazo","cuchara","tenedor"]
  */
  
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
  
  function principal () {   
    $pdo = new PDO('mysql:host=localhost;dbname=bdacme', 'bdacme', 'bdacme'); 
    $pdo->exec("SET CHARACTER SET utf8"); 
    
    if (empty($_GET['nivel'])) {
      $lista = obtenerNiveles($pdo); 
    }
    elseif (empty($_GET['tema'])) {
      $lista = obtenerTemas($pdo, $_GET['nivel']);
    }       
    else {
      $lista = obtenerPalabras($pdo, $_GET['nivel'], $_GET['tema']);
    }       
            
    header('Content-Type: application/json');
    echo json_encode($lista);
  }
  
  principal();
?>