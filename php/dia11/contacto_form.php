<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contacto</title>
  <style>
    body {
      background-color:#eee;
    }
    input[type="text"], input[type="email"], textarea {
      display:block;
      font-family:sans-serif;
      font-size:12pt;
      width:100%;
    }
    textarea {
      height:6em;
      resize:vertical;
    }
  </style>
</head>
<body>
  <h1>Contacto</h1>
  <form action="contacto_send3.php" method="post">
    <p>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" maxlength="20">
    </p>
    <p>
      <label for="correo">Correo electrónico:</label>
      <input type="email" id="correo" name="correo" maxlength="50">
    </p>
    <p>
      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje" maxlength="1000"></textarea>
    </p>
    <p>
      <button>Enviar</button>
    </p>
  </form>
</body>
</html>
