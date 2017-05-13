<?php

  class NoQuiero extends Exception { }
  class NoMeDaLaGana extends NoQuiero { }

  function jaimito() {
    throw new NoMeDaLaGana("Soy Jaimito");
  }

  function zipi() {
    throw new NoQuiero("Soy Zipi");
  }

  try {
    jaimito();
    zipi();
  }
  catch (NoMeDaLaGana $ex) {
    echo "No me da la gana";
  }
  catch (NoQuiero $ex) {
    echo "No quiero ";
  }
  catch (Exception $ex) {
    echo $ex->getMessage();
  }
