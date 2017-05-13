PDO
===

## Conectar con la BD: **new PDO**
```
function conectarbd() {
  $pdo = new PDO('mysql:host=localhost;dbname=bd_mesozoico', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("SET CHARACTER SET UTF8");
  return $pdo;
}

function conectarbd() {
  $pdo = new PDO('sqlite:acme.db');
  return $pdo;
}

$pdo = conectarbd();
```

## Consultas a la BD: **query**
```
$tabla = $pdo->query("SELECT nombre, longitud FROM dinosaurios");
foreach($tabla as $row) {
  echo $row['nombre'];
  echo $row['longitud'];
}

$tabla = $pdo->query("SELECT nombre, longitud FROM dinosaurios");
foreach($tabla as $row) {
  extract($row);
  echo $nombre;
  echo $longitud;
}
```

### Consultas a la BD con parámetros: **fetchAll**

Este método devuelve un array.

```
$tabla = $pdo->prepare("SELECT * FROM dinosaurios WHERE dieta_id = ?");
$tabla->execute(array(100));
$array = $tabla->fetchAll(PDO::FETCH_ASSOC);
echo $array[0]['nombre'];
echo $array[1]['nombre'];
```

### Consultas de una sóla fila: **fetch**
```
$tabla = $pdo->query("SELECT * FROM dinosaurios WHERE id = 1");
$row = $tabla->fetch();
echo $row['nombre'];
echo $row['longitud'];
```

### Consultas con parámetros GET o POST: **Usar el ?**

Se utiliza para hacer un buscador o para filtrar datos.

```
$sql = "SELECT * FROM dinosaurios WHERE dieta_id = ?";
$tabla = $pdo->prepare($sql);
$tabla->execute(array($dieta_id));
foreach($tabla as $row) {
  echo $row['nombre'];
  echo $row['longitud'];
}
```

## Ejecutar SQL para cambiar datos **exec**

### INSERT INTO
```
$pdo->exec("INSERT INTO dinosaurios(nombre) VALUES ('Pepesaurio')");
```

### UPDATE
```
$pdo->exec("UPDATE dinosaurios SET dieta_id=100 WHERE id=1");
```

### DELETE
```
$pdo->exec("DELETE FROM dinosaurios WHERE id=1");
```

## Ejecutar SQL para cambiar datos con parámetros GET o POST: **Usar el ?**

### INSERT INTO
```
$sql = "INSERT INTO dinosaurios(nombre, dieta_id) VALUES (?,?)";
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($nombre, $dieta_id));
```

### UPDATE
```
$sql = "UPDATE dinosaurios SET dieta_id = ? WHERE id = ?";
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($dieta_id, $id));
```

### DELETE
```
$sql = "DELETE FROM dinosaurios WHERE id = ?";
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($id));
```

## Resumen final

  - Consulta SELECT sin parámetros: query
  - Consulta SELECT con parámetros: prepare y execute
  - Realizar cambios en la BD sin parámetros: exec
  - Realizar cambios en la BD con parámetros: prepare y execute
