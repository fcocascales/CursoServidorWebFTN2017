<?php

  session_start();
  if (empty($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
  }
  $nombre = $_SESSION['usuario_nombre'];
