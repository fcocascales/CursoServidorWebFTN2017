/* cliente.js */

$(document).ready(function() {
  
  var $niveles  = $('#niveles');
  var $temas    = $('#temas');
  var $palabras = $('#palabras');
  var $cargando = $("#cargando");
  
  function obtenerNiveles() {
    fillSelect($niveles, {});
  }
  function obtenerTemas() {
    $temas.empty();
    $palabras.empty();
    var nivel = $niveles.val();
    if (nivel) fillSelect($temas, {nivel:nivel});
  }
  function obtenerPalabras() {
    $palabras.empty();
    var nivel = $niveles.val();
    var tema = $temas.val();
    if (nivel && tema) fillList($palabras, {nivel:nivel, tema:tema});
  }
  
  function fillSelect($select, filters) {    
    ajax(filters, function(list) {  
      $select.append('<option />');
      $select.append(tagList('option', list));
    });
  }  
  function fillList($list, filters) {
    ajax(filters, function(list) {
      $list.append(tagList('li', list));
    });
  }
  
  function tagList(tag, list) {
    return '<'+tag+'>'+list.join('</'+tag+'><'+tag+'>')+'</'+tag+'>';
  }
  
  function ajax(filtros, callback) {
    $.get("servidor.php", filtros, callback, "json");
  }
  
  obtenerNiveles();
  $niveles.on('change', obtenerTemas);
  $temas.on('change', obtenerPalabras); 
  
  $cargando.hide();
  $(document)
    .ajaxStart(function() { $cargando.show(); })
    .ajaxStop(function() { $cargando.hide(); });
  
});