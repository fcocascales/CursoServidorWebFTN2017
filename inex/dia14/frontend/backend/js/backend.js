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

  $('#categoria_id').change(function () { // Al seleccionar una categoría
    var idCategoria = $(this).val();
    var url = "../productos/proveedores.json.php?id="+idCategoria;
    $.getJSON(url, actualizarListaProveedores); // Petición AJAX
  });

  // Iniciar proveedores para la página "backend/productos/modificar.php"
  (function () { // Función anónima y autoejecutable
    var idCategoria = $('#categoria_id').val(); if (idCategoria == "") return;
    var idProveedor = $('#proveedor_id').val();
    var url = "../productos/proveedores.json.php?id="+idCategoria;
    $.getJSON(url, function(proveedores) { // Petición AJAX
      actualizarListaProveedores(proveedores);
      $('#proveedor_id').val(idProveedor);
    });
  })();

  function actualizarListaProveedores(proveedores) {
    var options = "<option></option>";
    for (id in proveedores) { // foreach($proveedores as $id=>$empresa)
      var empresa = proveedores[id];
      options += '<option value="'+id+'">'+empresa+'</option>';
    }
    $('#proveedor_id').html(options);
  }

});
