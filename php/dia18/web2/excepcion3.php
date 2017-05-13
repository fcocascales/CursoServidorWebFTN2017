<?php

  function alfa() {
    echo "Inicio alfa<br>";
    beta();
    echo "Fin alfa<br>";
  }
  function beta() {
    echo "Inicio beta<br>";
    gamma();
    echo "Fin beta<br>";
  }
  function gamma() {
    echo "Inicio gamma<br>";
    throw new Exception("No quiero seguir");
    echo "Fin gamma<br>";
  }

  echo "<pre>";

  try {
    alfa();
  }
  catch(Exception $ex) {
    echo "Error atrapado en el main: ".$ex->getMessage()."<br>";
  }
