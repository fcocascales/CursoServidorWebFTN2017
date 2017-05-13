
-- INSERT INTO viajes(destino, fecha, precio) VALUES ('$destino', '$fecha', $precio)

/*
$destino = "L'Hospitalet";
$fecha = "2017-04-20";
$precio = "100.50";
*/

-- Erróneo por culpa de la comilla simple
-- INSERT INTO viajes(destino, fecha, precio) VALUES ('L'Hospitalet', '2017-04-20', 100.50)

/*
  $destino = str_replace("'", "''", $destino);
*/
INSERT INTO viajes(destino, fecha, precio) VALUES ('L''Hospitalet', '2017-04-20', 100.50)

INSERT INTO viajes(destino, fecha, precio) VALUES ('L\'Hospitalet', '2017-04-20', 100.50)

/*
  Inyección de SQL (SQL Injection)

  $destino = "', '', ''); DELETE FROM viajes;";
  $fecha = "2017-04-20";
  $precio = "100.50";
*/

INSERT INTO viajes(destino, fecha, precio) VALUES ('', '', ''); DELETE FROM viajes;', '$fecha', $precio)
