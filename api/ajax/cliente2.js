/* cliente.js */

$(document).ready(function() {
  
  var $niveles  = $('#niveles');
  var $temas    = $('#temas');
  var $palabras = $('#palabras');
  var $cargando = $("#cargando");
  
  var nivel = '';
  
  function obtenerNiveles() {
    fillList($niveles, {});
  }
  function obtenerTemas() {    
    $niveles.children().removeClass('activo');
    $temas.empty(); 
    $palabras.empty(); 
    nivel = $(this).addClass('activo').html();
    if (nivel) fillList($temas, {nivel:nivel});
  }
  function obtenerPalabras() {
    $temas.children().removeClass('activo');
    $palabras.empty();
    var tema = $(this).addClass('activo').html();
    if (nivel && tema) fillList($palabras, {nivel:nivel, tema:tema});
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
  $niveles.delegate('li', 'mouseover', obtenerTemas);
  $temas.delegate('li', 'mouseover', obtenerPalabras); 
  
  $cargando.hide();
  $(document)
    .ajaxStart(function() { $cargando.show(); })
    .ajaxStop(function() { $cargando.hide(); });
  
});