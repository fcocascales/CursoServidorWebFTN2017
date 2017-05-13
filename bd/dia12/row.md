row
===

Las filas obtenidas de la tabla son un array asociativo

    $tabla = $pdo->query("SELECT nombre, longitud FROM dinosaurios");
    foreach($tabla as $row) {
      echo $row['nombre'];
      echo $row['longitud'];
    }

Aunque también son un array indexado

    $tabla = $pdo->query("SELECT nombre, longitud FROM dinosaurios");
    foreach($tabla as $row) {
      echo $row[0];
      echo $row[1];
    }

Realmente es un array asociativo e indexado al mismo tiempo. Algo como lo siguiente:

    $row = array(
      0=> 'Pepesaurio',
      1=> 100,
      'nombre'=> 'Pepesaurio',
      'longitud'=> 100,
    )
