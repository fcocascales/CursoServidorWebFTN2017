// frontend.js

$(function() { // Al cargar la página


  $('#toggle_nav').click(function() {
    $(this).next().slideToggle();
  });

  $('form#filtrar select').change(function() {
    $('#filtrar').submit();
  });

});
