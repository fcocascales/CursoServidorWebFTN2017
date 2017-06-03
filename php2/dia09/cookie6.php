<?php
  /*
    Cuando el navegador web solicita la página
    le ha enviado en la petición las cookies
    actuales. En el servidor se pueden consultar
    con $_COOKIE

    Cuando el servidor da la respuesta al
    navegador web le envía las nuevas cookie
    para que las almacene. Se hace con setcookie()
  */

  $saludo = "hola";

  // Esto es la cookie que se enviará al navegar
  setcookie("saludo", $saludo);

  // Obtener la cookie que me envió el navegador
  echo $_COOKIE['saludo'];

  
