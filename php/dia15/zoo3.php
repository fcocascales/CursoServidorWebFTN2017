<?php

  class Animal {
    public function respira() { echo "Respira<br>"; }
    protected function soy() {
      return "animal";
    }
    public function quienEres() {
      echo "Yo soy ".$this->soy();
    }
  }
  class Mamifero extends Animal {
    public function mama() { echo "Mama leche<br>"; }
    protected function soy() {
      return parent::soy()." mamífero";
    }
  }
  class Rumiante extends Mamifero {
    public function rumia() { echo "Rumía<br>"; }
    protected function soy() {
      return parent::soy()." rumiante";
    }
  }
  class Vaca extends Rumiante {
    public function muge() { echo "Muuuuu<br>"; }
    protected function soy() {
      return parent::soy()." vaca";
    }
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
  $paca->quienEres();

  echo "<h2>El avestruz Luz</h2>";
  $luz = new Avestruz();
  $luz->vuela();
  $luz->respira();

 ?>
