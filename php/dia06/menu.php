<?php
  $menu = array(
    'Uno'=> "ejemplo1.php",
    'Dos'=> "ejemplo2.php",
    'Tres'=> "ejemplo3.php",
  );
?><nav id="menu">
  <h2>Menú principal</h2>
  <ul>
      <?php
        foreach ($menu as $texto => $enlace) {
          if ($texto == $activo) {
            $current = "class=\"current\"";
          }
          else {
            $current = "";
          }
          echo "<li $current><a href=\"$enlace\">$texto</a></li>";
        }
      ?>
  </ul>
</nav>
