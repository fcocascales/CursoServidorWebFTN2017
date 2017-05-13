<?php

  function alfa() {
    echo "Inicio alfa<br>";
    beta();
    echo "Fin alfa<br>";
  }
  function beta() {
    echo "Inicio beta<br>";
    try {
      gamma();
    }
    catch (Exception $ex) {
      echo "Error atrapado en beta: ".$ex->getMessage()."<br>";
      throw $ex; // Relanzar la excepción
    }
    echo "Fin beta<br>";
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
