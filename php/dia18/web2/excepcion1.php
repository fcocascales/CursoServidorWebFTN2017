<?php

  function alfa() {
    beta();
  }
  function beta() {
    gamma();
  }
  function gamma() {
    throw new Exception("No quiero seguir");
  }

  echo "<pre>";
  alfa(); // Esto da un error fatal y es así
