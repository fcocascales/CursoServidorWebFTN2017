<h2>Insertar una nueva noticia</h2>
<?php

  $action = site_url().'/noticias/insertar';
  echo form_open($action, 'class="ficha"');

  echo form_label('Título: ', "titulo");
  echo form_input(array('name'=> "titulo"));

  echo form_label('Texto: ', "texto");
  echo form_textarea(array('name'=> "texto"));

  echo form_label('Fecha: ', "fecha");
  echo form_input(array('name'=> "fecha"));

  echo form_submit('', 'Insertar');
  echo form_close();

?>
<style>
  label, input, textarea { display:block; }
</style>
