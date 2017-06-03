<h2>Confirmar borrado de la noticia</h2>
<?php

  $action = site_url().'/noticias/borrar/'.$id;
  echo form_open($action, 'class="ficha"');

  echo "<h3>".htmlspecialchars($titulo)."</h3>";

  echo form_submit('', 'Borrar');
  echo form_close();

?>
<style>
  label, input, textarea { display:block; }
</style>
