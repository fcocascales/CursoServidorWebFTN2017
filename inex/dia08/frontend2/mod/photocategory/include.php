<?php

  require_once "lib/Category.php";

  $image = "img/categorias/".CurrentCategory::getId().".jpg";
  $description = CurrentCategory::getDescription();

?>

<section id="photocategory">
  <img src="<?php echo $image ?>" width="800" height="200">
  <div><?php echo htmlspecialchars($description) ?></div>
</section>
