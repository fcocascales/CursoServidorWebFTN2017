<?php
  session_start();

  if (isset($_SESSION['correcto']))
    $correcto = $_SESSION['correcto'];
  else
    $correcto = false;

  if (!$correcto) {
    header("Location: clave.php");
  }
?>
