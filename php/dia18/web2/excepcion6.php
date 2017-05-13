<?php

  function alfa() {
    try {
      echo "Inicio alfa<br>";
      beta();
    }
    catch (Exception $ex) {
      echo "Error atrapado en alfa: ".$ex->getMessage()."<br>";
    }
    finally {
      echo "Fin alfa<br>";
    }
  }
  function beta() {
    try {
      echo "Inicio beta<br>";
      gamma();
    }
    finally { // Siempre se ejecuta aunque haya excepciones
      echo "Fin beta<br>";
    }
  }
  function gamma() {
    echo "Inicio gamma<br>";
    throw new Exception("No quiero seguir");
    echo "Fin gamma<br>";
  }

  try {
    alfa();
  }
  catch(Exception $ex) {
    echo "Error atrapado en el main: ".$ex->getMessage()."<br>";
  }
