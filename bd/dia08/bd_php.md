Base de datos en PHP
====================

La aplicación de gestión de MySQL phpMyAdmin está escrita en PHP.

Hay 3 formas de acceder a BD desde PHP:
  - Funciones con prefijo **mysql**. Sistema obsoleto. No hay que usarla más.
  - Funciones con prefijo **mysqli** o clases [MySQL improved](http://php.net/manual/en/book.mysqli.php)
  - Clase **PDO** [PHP Data Objects](http://php.net/manual/en/book.pdo.php)

El sistema mejor es el PDO. Es independiente de la base de datos a utilizar. Se puede utilizar con cualquier base de datos.

## Ejemplo con PDO

      $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
      $table = $pdo->query($sql);
      foreach ($table as $row) {
        echo $row['campo1'];
        echo " ";
        echo $row['campo2'];
        echo "<br>";
      }
