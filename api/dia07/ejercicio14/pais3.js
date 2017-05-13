/*
  pais3.js

  - Funciona jQuery
  - Funciona la recepción de datos JSON
  - Manipular el DOM (Document Object Model)
    para rellenar los <select> y responder
    a sus eventos change.
*/

$(function () {

  // INICIO

  var $selectContinentes = $('#idcont');
  var $selectPaises = $('#idpais');
  var ruta = "../../dia06/ejercicio12";

  pedirContinentes();

  // EVENTOS AL CAMBIAR EL SELECT

  $selectContinentes.change(function() {
    var idContinente = $(this).val();
    pedirPaises(idContinente);
  });

  $selectPaises.change(function() {
    var idPais = $(this).val();
    pedirPaisDetalles(idPais);
  });

  // AJAX

  function pedirContinentes() {
    var url = ruta+"/continentes.json.php";
    ajax(url, recibirContinentes);
  }
  function recibirContinentes(continentes) {
    rellenarSelect($selectContinentes, continentes);
  }

  function pedirPaises(contId) {
    var url = ruta+"/paises.json.php?continente_id="+contId;
    ajax(url, recibirPaises);
  }
  function recibirPaises(paises) {
    rellenarSelect($selectPaises, paises);
  }

  function pedirPaisDetalles(paisId) {
    var url = ruta+"/pais.json.php?id="+paisId;
    ajax(url, recibirPaisDetalles);
  }
  function recibirPaisDetalles(pais) {
    rellenarDetalles(pais);
  }

  /*
    Hace una petición conectando a la URL, obtiene unos datos,
    y me los pasa llamando a la función callback
  */
  function ajax(url, callback) {
    $.getJSON(url, callback);
  }

  // RELLENAR DOM

  function rellenarSelect($select, data) {
    var options = "<option></option>";
    $.each(data, function(index, value){
      options += '<option value="'+value.id+'">'+
        value.nombre+'</option>';
    });
    $select.html(options);
  }

  function rellenarDetalles(pais) {
    $('#pais').html(pais.nombre);
    $('#capital').html(pais.capital);
    $('#moneda').html(pais.moneda);
    $('#continente').html(pais.continente);
    $('#poblacion').html(pais.poblacion);
    $('#extension').html(pais.extension);
  }

});
