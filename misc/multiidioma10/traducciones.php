<?php

  $languages = array(
    'en'=> "en_US.utf8",
    'es'=> "es_ES.utf8",
    'ca'=> "ca_ES.utf8",
  );

  $lang = seleccionarIdioma();

  function seleccionarIdioma() {
    global $languages;
    $defaultLang = 'en';
    $lang = isset($_REQUEST['lang'])? $_REQUEST['lang']: $defaultLang;
    if ( ! array_key_exists($lang, $languages)) {
      $lang = $defaultLang;
    }
    $locale = $languages[$lang];
    putenv("LC_ALL=$locale");
    setlocale(LC_ALL, $locale);
    $domain = "messages";
    bindtextdomain($domain, "./locale");
    bind_textdomain_codeset($domain, 'utf8');
    textdomain($domain);
    return $lang;
  }

  function mostrarBanderas() {
    global $languages;
    foreach($languages as $lang=>$locale) {
      echo "<a href=\"?lang=$lang\"><img src=\"flags/$lang.png\"></a> ";
    }
  }

?>
