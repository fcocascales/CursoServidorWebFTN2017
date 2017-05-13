Sustitución de parámetros
=========================

## Método 1

Usar la sustitución de variables del PHP en una cadena de texto.
Es el método más fácil y el peor porque es un código muy vulnerable al ataque "SQL Injection".

    $nombre = "Pepe";
    $telefono = "123-456-789";
    $sql = "INSERT INTO personas(nombre, telefono)
      VALUES ('$nombre', '$telefono')";
    $pdo->execute($sql);

## Método 2

Sustitución de parámetros usando ?
No es vulnerable a los ataques.

    $nombre = "Pepe";
    $telefono = "123-456-789";
    $sql = "INSERT INTO personas(nombre, telefono)
      VALUES (?, ?)";
    $sentencia = $pdo->prepare($sql);
    $sentencia->bindParam(1, $nombre);
    $sentencia->bindParam(2, $telefono);
    $sentencia->execute();

## Método 3

Sustitución de parámetros usando nombres de parámetros.
No es vulnerable a los ataques.

    $nombre = "Pepe";
    $telefono = "123-456-789";
    $sql = "INSERT INTO personas(nombre, telefono)
      VALUES (:nom, :telefon)";
    $sentencia = $pdo->prepare($sql);
    $sentencia->bindParam(':nom', $nombre);
    $sentencia->bindParam(':telefon', $telefono);
    $sentencia->execute();

## Método 4

Variante del método 3

    $nombre = "Pepe";
    $telefono = "123-456-789";
    $sql = "INSERT INTO personas(nombre, telefono)
      VALUES (:nom, :telefon)";
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute(array(
      ':nom'=> $nombre,
      ':telefon'=> $telefono
    ));    

## Método 5

Variante del método 2   

    $nombre = "Pepe";
    $telefono = "123-456-789";
    $sql = "INSERT INTO personas(nombre, telefono) VALUES (?, ?)";
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute(array($nombre, $telefono));
