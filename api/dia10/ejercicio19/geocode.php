<?php

  $ciudad = isset($_GET['ciudad'])? strip_tags($_GET['ciudad']) : "";

  if (!empty($ciudad)) {
    // Acceder al API REST con el método GET
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=";
    $json = file_get_contents($url.urlencode($ciudad));
    $array = json_decode($json, $assoc=true);
    $location = $array['results'][0]['geometry']['location'];
    $lat = $location['lat'];
    $lng = $location['lng'];
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Geolocalización</title>
</head>
<body>
  <h1>Geolocalización de una ciudad</h1>
  <form method="get">
    <input type="text" name="ciudad">
    <button>Enviar</button>
  </form>

  <?php
    if (!empty($ciudad)) {
      echo "<h2>".htmlspecialchars($ciudad)."</h2>";
      echo "<p>Latitud: <strong>$lat&deg;</strong>";
      echo "<br>Longitud: <strong>$lng&deg</strong></p>";
    }
  ?>

  <br>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d23945.35868833885!2d<?php echo $lng ?>!3d<?php echo $lat ?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sca!2ses!4v1493976555468"
  width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

</body>
</html>
