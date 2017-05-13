<?php
  /*
    pagina1.php
    pagina1.php?lang=ca
  */
  include "traducciones.php";

  if (isset($_GET['lang'])) {
    $lang = $_GET['lang']; // ca=Català, en=English, es=Español
  }
  else {
    $lang = 'en'; // Idioma predeterminado
  }

  // Filtrar el valor de lang
  if ( ! array_key_exists($lang, $traducciones)) {
    $lang = 'en'; // Idioma predeterminado
  }

?><!DOCTYPE html>
<html lang="<?php echo $lang ?>">
  <head>
    <meta charset="utf-8">
    <title><?php echo $traducciones[$lang]['pagina1'] ?></title>
  </head>
  <body>
    <p><?php
      foreach($traducciones as $clave=>$traduccion) {
        echo "<a href=\"?lang=$clave\"><img src=\"$clave.png\"></a> ";
      }
    ?><p>
    <h1><?php echo htmlspecialchars($traducciones[$lang]['pagina1']) ?></h1>
    <h2><?php echo htmlspecialchars($traducciones[$lang]['titulo1']) ?></h2>
    <p><?php echo htmlspecialchars($traducciones[$lang]['noticia1']) ?></p>
  </body>
</html>
