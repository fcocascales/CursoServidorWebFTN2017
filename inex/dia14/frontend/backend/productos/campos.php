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
  <label for="producto">Producto:</label>
  <input type="text" id="producto" name="producto"
    value="<?php echo obtener('producto') ?>" required>
</p>
<p>
  <label for="precio">Precio:</label>
  <input type="text" id="precio" name="precio"
    value="<?php echo obtener('precio_unidad') ?>" required>
</p>
<p>
  <label for="cantidad">Cantidad:</label>
  <input type="text" id="cantidad"
    value="<?php echo obtener('cantidad_por_unidad') ?>" name="cantidad">
</p>
<p>
  <label for="categoria_id">Categoría:</label>
  <select id="categoria_id" name="categoria_id" required>
    <option></option>
    <?php imprimirFormOpciones($categorias, obtener('categoria_id')); ?>
  </select>
</p>
<p>
  <label for="proveedor_id">Proveedor:</label>
  <select id="proveedor_id" name="proveedor_id" required>
    <option></option>
    <?php imprimirFormOpciones($proveedores, obtener('proveedor_id')); ?>
  </select>
</p>
<p>
  <label for="descripcion">Descripción:</label>
  <textarea id="descripcion" name="descripcion"><?php echo obtener('descripcion') ?></textarea>
</p>
<p>
  <label for="destacado">Destacado:</label>
  <input type="checkbox" id="destacado" name="destacado" <?php if(!empty(obtener('destacado'))) echo "checked" ?> >
</p>
<p>
  <label for="activado">Activado:</label>
  <input type="checkbox" id="activado" name="activado" <?php if(!empty(obtener('activado'))) echo "checked" ?> >
</p>
<p>
  <label for="foto">Foto:<small>320&times;240px</small></label>
  <input type="file" id="foto" name="foto">

</p>
