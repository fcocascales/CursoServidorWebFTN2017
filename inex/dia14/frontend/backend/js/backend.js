// backend/js/backend.js

/*
  En la páginas "productos/insertar.php"
    y "productos/modificar.php"

  Al seleccionar en el SELECT categoría
  hay que filtrar el SELECT de proveedores

  En el archivo "productos/campos.php" tengo
    select#categoria_id y select#proveedor_id

  1. El evento onChange de #categoria_id
  2. Obtener el id de la categoría
  3. Enviar una petición al PHP para obtener
     los proveedores de la categoría elegida
  4. Mostrar los proveedores en el select#proveedor_id
     Convertir los datos JSON a <option> del <select>
     JSON será un array asociativo de id=>empresa
*/

$(function() { // Al terminar de cargar la página

  $('#categoria_id').change(function () {
    var idCategoria = $(this).val();
    var url = "../productos/proveedores.json.php?id="+idCategoria;
    $.getJSON(url, function(proveedores) {
      var options = "<option></option>";
      // foreach($proveedores as $idProveedor=>$texto)
      for (idProveedor in proveedores) {
        var empresa = proveedores[idProveedor];
        options += '<option value="'+idProveedor+'">'+empresa+'</option>';
      }
      $('#proveedor_id').html(options);
    });
  });

});
