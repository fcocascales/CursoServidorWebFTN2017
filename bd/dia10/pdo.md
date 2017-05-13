PDO
===

PHP Data Objects

Es una clase para conectar y usar bases de datos.

## Conexión con la base de datos

Conectar con una base de datos para hacer consultas (SELECT) o modificaciones (INSERT/UPDATE/DELETE).

Datos que se necesitan para conectar:
  1. Tipo de base de datos: MySQL, SQLite, ...
  2. El servidor: localhost
  3. El nombre de la base de datos: bd_mesozoico
  4. Usuario de conexión a la BD: root
  5. Contraseña del usuario

```

$pdo = new PDO($cadena, $user, $pass);

$pdo = new PDO("mysql:host=localhost;dbname=bd_mesozoico", "root", "");

$pdo = new PDO("sqlite:bd_mesozoico.db");

```

Si no se puede crear el objeto PDO se producirá una excepción que se puede capturar con el try catch.

### Errores indicados con excepciones

Es conveniente que si usamos los métodos de PDO que nos indique los errores lanzando excepciones. La excepciones se capturan con el try catch.

      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

### La conexión con la BD use UTF8 (Unicode)

      $pdo->exec("SET CHARACTER SET UTF8");

### Cerrar la conexión con la BD

Que la variable deje de apuntar al objeto.

      unset($pdo);
