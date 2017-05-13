PDO - PHP Data Objects
======================

Son unas clases (POO) para acceder a bases de datos.

Enlaces:
  - [php.net](http://php.net/manual/en/book.pdo.php)
  - [w3schools](https://www.w3schools.com/php/php_mysql_intro.asp)
  - [phpdelusions](https://phpdelusions.net/pdo)

Bases de datos a las que se puede acceder con PDO:
  - **MySQL** (MariaDB), **SQLite**, PostgreSQL, Oracle, MS SQL Server, Firebird, Informix, etc.

## Clases

  - **PDO** - Conexión con la base de datos
  - **PDOStatement** - Acceso a una sentencia de SQL

### Clase PDO

Al crear un objeto de esta clase se obtiene una conexión con una BD.

#### Ejemplos de conexión:
  - MySQL: `$pdo = new PDO("mysql:host=localhost;dbname=acme", "root", "");`
  - SQLite: `$pdo = new PDO("sqlite:acme.db");`
  - PostgreSQL: `$pdo = new PDO("pgsql:host=localhost;port=5432;dbname=acme;user=bruce;password=mypass");`

#### Métodos de la clase PDO:
  [docu](http://php.net/manual/en/class.pdo.php)

  - **prepare**($sql) --> *PDOStatement*.
    Se utiliza cuando el SQL puede tener parámetros ?
  - **query**($sql) -->  *PDOStatement*.
    Se utiliza SQL sin parámetros.
  - **lastInsertId** --> Retorna el valor del último id insertado.
    Ejemplo: Al insertar un pedido y su detalle. Al insertar el detalle necesitamos conocer el id del pedido insertado.

#### Transacciones:

Una serie de sentencias SQL (INSERT INTO, UPDATE, DELETE) que se han de ejecutar todas o ninguna.

    try {
      $pdo->beginTransaction();
      ...
      ...
      ...
      $pdo->commit();      
    }
    catch (Exception $ex) {
      $pdo->rollBack();
    }

### Clase PDOStatement

  - SQL corriente: SELECT, INSERT INTO, UPDATE y DELETE
  - Otros SQL: CALL PROCEDURE, SHOW, CREATE, DROP, ...

Al llamar a los métodos *prepare* o *query* de la clase *PDO* nos da como resultado un objeto de la clase *PDOStatement*.

#### Métodos de la clase PDOStatement:

El objeto PDOStatement se puede usar directamente en un bucle *foreach* para obtener las filas del resultado. De esta forma no es necesario llamar explícitamente a *fetch*.

  - **execute**(array). Viene después de un *prepare*. Ejecuta la sentencia sustituyendo los ?.
  - **fetch**. Se puede llamar después de un *query* o de un *execute*. Retorna la siguiente fila del resultado empezando por la primera. Cuando no hay más filas da *false*. Avanza siempre de uno en uno hacia adelante. El resultado puede ser un array asociativo o puede ser un objeto PHP.
  - **fetchAll**. Retorna todas las filas del resultado en un array. Puede ser un array indexado de arrays asociativos. Puede ser un array indexado de objetos PHP.

El campo nombre de la primera fila:
    - `$array[0]['nombre']`  - array indexado de arrays asociativos
    - `$array[0]->nombre`    - array indexado de objetos PHP
