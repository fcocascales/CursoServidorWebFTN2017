<?php

  class Animal {
  }
  class Mamifero extends Animal {
  }
  class Rumiante extends Mamifero {
  }
  class Vaca extends Rumiante {
  }
  class Ave extends Animal {
  }
  class Avestruz extends Ave {
  }
  class Pez extends Animal {
  }

  $paca = new Vaca();

  if ($paca instanceof Vaca) echo "Paca es una vaca<br>";
  if ($paca instanceof Rumiante) echo "Paca es un rumiante<br>";
  if ($paca instanceof Mamifero) echo "Paca es un mamífero<br>";
  if ($paca instanceof Animal) echo "Paca es un animal<br>";
  if ($paca instanceof Ave) echo "Paca es un ave<br>";



 ?>
