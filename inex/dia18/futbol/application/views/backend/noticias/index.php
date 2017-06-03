<h2>Gestor de noticias</h2>

<p>
  <a href="<?= site_url() ?>/noticias/nuevo">
    Insertar una nueva noticia</a>
</p>

<table border="1">
  <thead>
    <tr>
      <th>Título</th>
      <th>Fecha</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach($listado as $obj):
        $linkModificar = site_url().'/noticias/editar/'.$obj->id;
        $linkBorrar = site_url().'/noticias/borrando/'.$obj->id;
        echo '<tr>';
        echo '<td>'.htmlspecialchars($obj->titulo).'</td>';
        echo '<td>'.$obj->fecha.'</td>';
        echo "<td><a href=\"$linkModificar\">Modificar</a></td>";
        echo "<td><a href=\"$linkBorrar\">Borrar</a></td>";
        echo '</tr>';
      endforeach;
    ?>
  </tbody>
</table>
