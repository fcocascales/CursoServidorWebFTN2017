<?php
  // INICIALIACIÓN ------------------------------
  session_start();

  // FUNCIONES ----------------------------------

  function obtenerContadorGlobal() {
    global $contador;
    if (!isset($contador)) { $contador = 0; }
    $contador = $contador + 1;
    return $contador;
  }
  function obtenerContadorSesion() {
    if (!isset($_SESSION['contador'])) $contador = 0;
    else $contador = $_SESSION['contador'];
    $contador = $contador + 1;
    $_SESSION['contador'] = $contador;
    return $contador;
  }
  function obtenerContadorCookie() {
    if (!isset($_COOKIE['contador'])) $contador = 0;
    else $contador = $_COOKIE['contador'];
    $contador = $contador + 1;
    setcookie('contador', $contador, time()+24*60*60);
    return $contador;
  }
  function obtenerContadorFichero() {
    if (!file_exists('contador.txt')) $contador = 0;
    else $contador = file_get_contents('contador.txt');
    $contador = intval($contador) + 1;
    file_put_contents('contador.txt', $contador);
    return $contador;
  }

  // PROGRAMA PRINCIPAL -------------------------

  $contador1 = obtenerContadorGlobal();
  $contador2 = obtenerContadorSesion();
  $contador3 = obtenerContadorCookie();
  $contador4 = obtenerContadorFichero();

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Contadores</title>
<style>
  p span {
    background-color:#666;
    text-shadow:1px 1px 1px #000;
    color:#fff;
    padding:0.5em 1em;
    border:2px inset;
  }
</style>
</head>
<body>
  <h1>Contadores</h1>

  <h2>Contador de variable global</h2>
  <p><span><?php echo $contador1 ?></span></p>
  <p>La variable se crea cada vez que se carga la página.
     Por lo tanto siempre vale uno. No es realmente un contador.</p>

  <h2>Contador de sesión</h2>
  <p><span><?php echo $contador2 ?></span></p>
  <p>Cuenta las veces que actualizas el navegador. La cuenta se reinicia
     si cierras el navegador o si usas otro navegador. Cada persona
     tiene su propio contador independiente.</p>

  <h2>Contador de cookie</h2>
  <p><span><?php echo $contador3 ?></span></p>
  <p>Cuenta las veces que actualizas la página en un navegador.
    La cuenta se reinicia si la cookie caducó en el navegador. Cada persona
    tiene su propio contador independiente.</p>

  <h2>Contador de fichero</h2>
  <p><span><?php echo $contador4 ?></span></p>
  <p>Cuenta las veces que se actualiza la página de todos los navegadores
     de todas las personas. La cuenta no se reinicia nunca. Es una
     cuenta infinita.</p>
</body>
</html>
