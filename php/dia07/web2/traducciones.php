<?php
  /*
    Un array con todas las traducciones de la web
    en cada uno de los idiomas que se quiera.

    Array asociativo de arrays asociativos

    Para obtener la traducción del titulo1 en inglés:
      $traducciones['en']['titulo1']
  */
  $traducciones = array(
    'ca'=> array(
      'pagina1'=> "Últimes notícies",
      'titulo1'=> "Dos detinguts per 12 'allunatges' al Vallès",
      'noticia1'=> "Els lladres s'estavellaven vehicles que havien robat contra aparadors",
    ),
    'en'=> array(
      'pagina1'=> "Last news",
      'titulo1'=> "Two arrested for 12 'landings' in the Vallès",
      'noticia1'=> "The thieves crashed vehicles they had stolen from shop windows",
    ),
    'es'=> array(
      'pagina1'=> "Últimas noticias",
      'titulo1'=> "Dos detenidos por 12 'alunizajes' en el Vallès",
      'noticia1'=> "Los ladrones estrellaban vehículos que habían robado contra escaparates",
    ),
    'pt'=> array(
      'pagina1'=> "Últimas notícias",
      'titulo1'=> "Dois presos por 12 'desembarques' no Vallès",
      'noticia1'=> "Os ladrões tinham roubado veículos bateu contra janelas",
    ),
  );

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

  function mostrarBanderas() {
    global $traducciones;
    foreach($traducciones as $clave=>$traduccion) {
      echo "<a href=\"?lang=$clave\"><img src=\"$clave.png\"></a> ";
    }
  }

  function traducir($clave) {
    global $traducciones, $lang;
    echo htmlspecialchars($traducciones[$lang][$clave]);
  }







?>
