<?php
  /*
    Este fichero se incluye desde:
    - "insertar.php"
    - "modificar.php" - Hay que definir una variable global
       llamada $row que será un array asociativo con
       los valores de cada campo.
  */

  if (!isset($row)) $row = array();

  function obtener($nombreCampo) {
    global $row;
    if (isset($row[$nombreCampo]))
      return htmlspecialchars($row[$nombreCampo]);
    else return "";
  }
?>
<p>
  <label for="categoria">Categoría:</label>
  <input type="text" id="categoria" name="categoria"
    value="<?php echo obtener('categoria') ?>" required>
</p>
<p>
  <label for="descripcion">Descripción:</label>
  <textarea id="descripcion" name="descripcion"><?php echo obtener('descripcion') ?></textarea>
</p>
<p>
  <label for="activado">Activado:</label>
  <input type="checkbox" id="activado" name="activado" <?php if(!empty(obtener('activado'))) echo "checked" ?> >
</p>
<p>
  <label for="foto">Foto:<small>800&times;200px</small></label>
  <input type="file" id="foto" name="foto">
</p>
