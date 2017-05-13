<?php
  require_once "feeds.php";

  $blog = isset($_GET['blog'])? strip_tags($_GET['blog']) : "";
  $rss = buscarBlog($feeds, $blog);

  function buscarBlog($feeds, $blog) {
    if (!empty($blog)) {
      $link = $feeds[$blog];
      $xml = file_get_contents($link);
      $rss = new SimpleXMLElement($xml);
      return $rss;
    }
    else return null;
  }

  function imprimirOpcionesBlog($feeds, $blog) {
    foreach($feeds as $key=>$link) {
      $selected = $key==$blog? " selected" : "";
      echo "<option$selected>$key</option>";
    }
  }

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Blogs</title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  <form method="get">
    <label for="blog">Blog:</label>
    <select name="blog" id="blog">
      <option></option>
      <?php imprimirOpcionesBlog($feeds, $blog); ?>
    </select>
    <button>Enviar</button>
  </form>

  <?php
    if (!empty($rss)):
      echo "<h1>{$rss->channel->title}</h1>\n";
      echo "<p>{$rss->channel->description}</p>\n";
      foreach ($rss->channel->item as $item):
        echo "<div class=\"articulo\">\n";
        echo "<h2><a href=\"$item->link\">$item->title</a></h2>\n";
        echo "<p class=\"fecha\">$item->pubDate</p>\n";
        echo "<div class=\"texto\">$item->description</div>\n";
        echo "</div>\n";
      endforeach;
    endif;
  ?>

</body>
</html>
