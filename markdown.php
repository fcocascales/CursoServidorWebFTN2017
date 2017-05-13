<?php
  require_once "parsedown-master/Parsedown.php";

  $file = isset($_GET['md'])?$_GET['md']:'';

  if (!empty($file)) {
    $text = file_get_contents($file);
  }
  else $text = file_get_contents("dia15/herencia.md");

  $pd = new Parsedown();

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $file ?></title>
<style>
  body { margin:2em; font-family:Helvetica,Verdana,sans-serif; background-color:#fafaf6; color:#444; line-height:160%; }
  h1,h2,h3 { font-weight:normal; }
  table { border-collapse:collapse; }
  th, td { border:1px solid #ccc; padding:0.4em 0.6em; }
  pre { background-color:#f6f0f0; padding:1em; }
</style>
</head>
<body>
  <?php echo $pd->text($text); ?>
</body>
</html>
