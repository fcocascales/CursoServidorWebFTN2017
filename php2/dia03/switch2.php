<?php
/*
  EJERCICIO:

  Dado el código del idioma mostrar el nombre del idioma.

    ca => Català
    de => Deutsch
    en => English
    es => Español
    it => Italiano

*/

  $codigo = 'en';

  switch ($codigo) {
    case 'ca': echo "Català"; break;
    case 'de': echo "Deutsch"; break;
    case 'en': echo "English"; break;
    case 'es': echo "Español"; break;
    case 'it': echo "Italiano"; break;
    default: echo "ERROR";    
  }




?>
