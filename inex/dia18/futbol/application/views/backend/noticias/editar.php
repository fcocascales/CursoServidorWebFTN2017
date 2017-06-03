<h2>Editar la noticia</h2>
<?php

  $action = site_url().'/noticias/modificar/'.$id;
  echo form_open($action, 'class="ficha"');

  echo form_label('Título: ', "titulo");
  echo form_input(array('name'=>"titulo", 'value'=>$titulo));

  echo form_label('Texto: ', "texto");
  echo form_textarea(array('name'=>"texto", 'value'=>$texto));

  echo form_label('Fecha: ', "fecha");
  echo form_input(array('name'=>"fecha", 'value'=>$fecha));

  echo form_submit('', 'Modificar');
  echo form_close();

?>
<style>
  label, input, textarea { display:block; }
</style>
