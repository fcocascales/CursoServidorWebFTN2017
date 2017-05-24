// frontend.js

$(function() { // Al cargar la página web


  $('#toggle_nav')
    .click(function() { // Ocultar/Mostrar el menú de categorías
      $(this).next().slideToggle();
    });

  $('form#filtrar select')
    .change(function() { // Enviar el formulario al cambiar un filtro
      $('#filtrar').submit();
    })
    .each(function() { // Mostrar en el título el elemento seleccionado
      var text = $(this).find(':selected').text();
      $(this).attr('title', text);
    });

});
