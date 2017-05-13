<?php

  $conn = "mysql:host=localhost;dbname=bd_neptuno";
  $pdo = new PDO($conn, "root", "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("SET CHARACTER SET UTF8");
  $sql = "SELECT pais, codigo, empresa, contacto
    FROM clientes ORDER BY 1, 2 LIMIT 20";
  $sql2 = "SELECT codigo, empresa
    FROM clientes ORDER BY 1, 2 LIMIT 20";
  $sql3 = "SELECT codigo, empresa, contacto, pais
    FROM clientes ORDER BY 1, 2 LIMIT 20";

  //$array = $result->fetchAll();
  //$array = $result->fetchAll(PDO::FETCH_ASSOC);
  //$array = $result->fetchAll(PDO::FETCH_CLASS);
  //$array = $result->fetchAll(PDO::FETCH_COLUMN);
  //$array = $result->fetchAll(PDO::FETCH_NUM);
  //$array = $result->fetchAll(PDO::FETCH_GROUP);
  //$array = $result->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC);
  //$array = $result->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_NUM);
  //$array = $result->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_COLUMN);


?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PDOStatement::fetchAll</title>
  <style media="screen">
    body { margin:2em; }
    section { margin-bottom:4em;  }
    #content h2 { font-family:monospace; }
    li { margin:0.3em; }
    .index li a { text-decoration:none; font-family:monospace; }
    .index li a:hover { text-decoration:underline; }
    pre {
      display:inline-block;
      font-size:0.9em;
      background-color:#eee;
      padding:1em;
    }
  </style>
</head>
<body>
  <section id="index">
    <h1>PDOStatement::fetchAll</h1>
    <h2>Índice </h2>
    <ul class="index">
      <li><a href="#f1">fetchAll ( PDO::FETCH_BOTH )</a></li>
      <li><a href="#f2">fetchAll ( PDO::FETCH_ASSOC )</a></li>
      <li><a href="#fa">fetchAll ( PDO::FETCH_OBJ )</a></li>
      <li><a href="#f3">fetchAll ( PDO::FETCH_CLASS )</a></li>
      <li><a href="#f4">fetchAll ( PDO::FETCH_COLUMN )</a></li>
      <li><a href="#f5">fetchAll ( PDO::FETCH_NUM )</a></li>
      <li><a href="#f6">fetchAll ( PDO::FETCH_GROUP )</a></li>
      <li><a href="#f7">fetchAll ( PDO::FETCH_GROUP | PDO::FETCH_ASSOC )</a></li>
      <li><a href="#f8">fetchAll ( PDO::FETCH_GROUP | PDO::FETCH_NUM )</a></li>
      <li><a href="#f9">fetchAll ( PDO::FETCH_GROUP | PDO::FETCH_COLUMN )</a></li>
      <li><a href="#fb">fetch ( PDO::FETCH_LAZY )</a></li>
      <li><a href="#fc">fetchAll ( PDO::FETCH_KEY_PAIR )</a></li>
      <li><a href="#fd">fetchAll ( PDO::FETCH_UNIQUE )</a></li>
      <li><a href="#fe">fetchAll ( PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC )</a></li>
    </ul>
    <h2>Enlaces</h2>
    <ul>
      <li><a href="https://phpdelusions.net/pdo/fetch_modes">PDO Fetch Modes</a> &mdash; phpdelusions.net</li>
    </ul>
  </section>
  <section id="content">
    <h2 id="f1">fetchAll(PDO::FETCH_BOTH)</h2>
    <p>Array indexado de arrays indexados y asociativos</p>
    <pre><?php echo $sql ?></pre><br>
    <pre><?php print_r($pdo->query($sql)->fetchAll(PDO::FETCH_BOTH)) ?></pre>

    <h2 id="f2">fetchAll(PDO::FETCH_ASSOC)</h2>
    <p>Array indexado de arrays asociativos</p>
    <pre><?php echo $sql ?></pre><br>
    <pre><?php print_r($pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC)) ?></pre>

    <h2 id="fa">fetchAll(PDO::FETCH_OBJ)</h2>
    <p>Array indexado de objetos</p>
    <pre><?php echo $sql ?></pre><br>
    <pre><?php print_r($pdo->query($sql)->fetchAll(PDO::FETCH_OBJ)) ?></pre>

    <h2 id="f3">fetchAll(PDO::FETCH_CLASS)</h2>
    <p>Array indexado de objetos</p>
    <pre><?php echo $sql ?></pre><br>
    <pre><?php print_r($pdo->query($sql)->fetchAll(PDO::FETCH_CLASS)) ?></pre>

    <h2 id="f4">fetchAll(PDO::FETCH_COLUMN)</h2>
    <p>Array indexado de los valores de la primera columna</p>
    <pre><?php echo $sql2 ?></pre><br>
    <pre><?php print_r($pdo->query($sql2)->fetchAll(PDO::FETCH_COLUMN)) ?></pre>

    <h2 id="f5">fetchAll(PDO::FETCH_NUM)</h2>
    <p>Array indexado de arrays indexados</p>
    <pre><?php echo $sql ?></pre><br>
    <pre><?php print_r($pdo->query($sql)->fetchAll(PDO::FETCH_NUM)) ?></pre>

    <h2 id="f6">fetchAll(PDO::FETCH_GROUP)</h2>
    <p>Array asociativo de arrays indexados de arrays indexados y asociativos</p>
    <pre><?php echo $sql ?></pre><br>
    <pre><?php print_r($pdo->query($sql)->fetchAll(PDO::FETCH_GROUP)) ?></pre>

    <h2 id="f7">fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC)</h2>
    <p>Array asociativo de arrays indexados de arrays asociativos</p>
    <pre><?php echo $sql ?></pre><br>
    <pre><?php print_r($pdo->query($sql)->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC)) ?></pre>

    <h2 id="f8">fetchAll(PDO::FETCH_GROUP|PDO::FETCH_NUM)</h2>
    <p>Array asociativo de arrays indexados de arrays indexados</p>
    <pre><?php echo $sql ?></pre><br>
    <pre><?php print_r($pdo->query($sql)->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_NUM)) ?></pre>

    <h2 id="f9">fetchAll(PDO::FETCH_GROUP|PDO::FETCH_COLUMN)</h2>
    <p>Array asociativo de arrays indexados</p>
    <pre><?php echo $sql ?></pre><br>
    <pre><?php print_r($pdo->query($sql)->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_COLUMN)) ?></pre>

    <h2 id="fb">fetch(PDO::FETCH_LAZY)</h2>
    <p>Datos obtenidos bajo demanda</p>
    <pre><?php echo $sql ?></pre><br>
    <pre><?php print_r($pdo->query($sql)->fetch(PDO::FETCH_LAZY)) ?></pre>

    <h2 id="fc">fetchAll(PDO::FETCH_KEY_PAIR)</h2>
    <p>Array asociativo</p>
    <pre><?php echo $sql2 ?></pre><br>
    <pre><?php print_r($pdo->query($sql2)->fetchAll(PDO::FETCH_KEY_PAIR)) ?></pre>

    <h2 id="fd">fetchAll(PDO::FETCH_UNIQUE)</h2>
    <p>Array asociativo de array indexado y asociativo</p>
    <pre><?php echo $sql3 ?></pre><br>
    <pre><?php print_r($pdo->query($sql3)->fetchAll(PDO::FETCH_UNIQUE)) ?></pre>

    <h2 id="fe">fetchAll(PDO::FETCH_UNIQUE|PDO::FETCH_ASSOC)</h2>
    <p>Array asociativo de array asociativo</p>
    <pre><?php echo $sql3 ?></pre><br>
    <pre><?php print_r($pdo->query($sql3)->fetchAll(PDO::FETCH_UNIQUE|PDO::FETCH_ASSOC)) ?></pre>
    
  </section>
</body>
</html>
