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
  alfa(); // Esto da un error fatal y es así
