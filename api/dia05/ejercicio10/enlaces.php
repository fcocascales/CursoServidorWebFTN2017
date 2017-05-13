<?php

  $links = array(
    'Wikipedia'=> "//wikipedia.org",
    'Foment'=> "//www.fomentformacio.com",
    'PHP'=> "//php.net",
    'ProInf'=> "//proinf.net",
  );

  if (isset($_GET['web'])) {
    $web = strip_tags($_GET['web']);
    $link = $links[$web];
    header("Location: $link");
    exit;
  }

  function printOptions($links) {
    foreach($links as $key=>$value) {
      echo "<option>$key</option>";
    }
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Enlaces</title>
  <script type="text/javascript">
    function seleccionar(select) {
      //alert(select.value);
      select.form.submit();
      //document.getElementById('form1').submit();
    }
  </script>
</head>
<body>
  <h1>Enlaces</h1>
  <form method="get" id="form1">
    <select name="web" onchange="seleccionar(this);">
      <option></option>
      <?php printOptions($links); ?>
    </select>
    <!--button>Enviar</button-->
  </form>
</body>
</html>
