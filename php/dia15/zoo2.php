<?php

  class Animal {
    public function respira() { echo "Respira<br>"; }
  }
  class Mamifero extends Animal {
    public function mama() { echo "Mama leche<br>"; }
  }
  class Rumiante extends Mamifero {
    public function rumia() { echo "Rumía<br>"; }
  }
  class Vaca extends Rumiante {
    public function muge() { echo "Muuuuu<br>"; }
  }
  class Ave extends Animal {
    public function vuela() { echo "Vuela<br>"; }
  }
  class Avestruz extends Ave {
    public function vuela() { echo "No vuela<br>"; }
  }
  class Pez extends Animal {
    public function nada() { echo "Nada<br>"; }
  }

  echo "<h2>La vaca Paca</h2>";
  $paca = new Vaca();
  $paca->muge();
  $paca->rumia();
  $paca->mama();
  $paca->respira();

  echo "<h2>El avestruz Luz</h2>";
  $manolo = new Avestruz();
  $manolo->vuela();
  $manolo->respira();

 ?>
