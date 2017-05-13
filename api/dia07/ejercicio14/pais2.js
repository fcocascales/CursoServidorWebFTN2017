/*
  pais2.js

  Comprobar que la comunicación con AJAX funciona.
  Pedir JSON y recibirlo.
*/

$(function () {

  var ruta = "../../dia06/ejercicio12";

  //pedirContinentes();
  //pedirPaises(3);
  pedirPaisDetalles(1);

  function pedirContinentes() {
    var url = ruta+"/continentes.json.php";
    ajax(url, recibirContinentes);
  }
  function recibirContinentes(continentes) {
    var json = JSON.stringify(continentes);
    alert(json);
  }


  function pedirPaises(contId) {
    var url = ruta+"/paises.json.php?continente_id="+contId;
    ajax(url, recibirPaises);
  }
  function recibirPaises(paises) {
    var json = JSON.stringify(paises);
    alert(json);
  }


  function pedirPaisDetalles(paisId) {
    var url = ruta+"/pais.json.php?id="+paisId;
    ajax(url, recibirPaisDetalles);
  }
  function recibirPaisDetalles(pais) {
    var json = JSON.stringify(pais);
    alert(json);
  }


  /*
    Hace una petición conectando a la URL, obtiene unos datos,
    y me los pasa llamando a la función callback
  */
  function ajax(url, callback) {
    $.getJSON(url, callback);
  }

});
