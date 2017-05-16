Paginación
==========

La paginación consiste en dividir el resultado de un SELECT en varias páginas independientes.

Se muestra una sola página de resultados cada vez con enlaces a la página anterior y página siguiente.

## Código MySQL para paginar

- Primera página: `SELECT * FROM tabla LIMIT 0, 10`
- Segunda página: `SELECT * FROM tabla LIMIT 10, 10`
- Tercera página: `SELECT * FROM tabla LIMIT 20, 10`
- etc.

## Código SQLite para paginar

- Primera página: `SELECT * FROM tabla LIMIT 10 OFFSET 0`
- Segunda página: `SELECT * FROM tabla LIMIT 10 OFFSET 10`
- Tercera página: `SELECT * FROM tabla LIMIT 10 OFFSET 20`
- etc.

## Código PHP para paginar

Hay que indicar en la URL la página a visualizar.

  - Primera página: `noticias.php?pagina=1`
  - Segunda página: `noticias.php?pagina=2`
  - Tercera página: `noticias.php?pagina=3`

### Enlaces a la página anterior y la página siguiente.

Supongamos que estamos visualizando la página 10.

  - `<a href="?pagina=9">Página anterior</a>`
  - `<a href="?pagina=11">Página siguiente</a>`

**Hay un problema**: ¿Qué pasa si sólo hay 10 páginas en total?
No debo mostrar el enlace a la página siguiente

**Solución**: Conocer cuántas páginas hay en total.

### Código SQL para saber el número total de páginas

`SELECT CEIL(COUNT(*)/10) FROM noticias`

Si hay 91 noticias, a 10 noticias por página, en total son 10 páginas. La última página tendrá un solo resultado.

### Problema con la sustitución de parámetros en el LIMIT

Este código no funciona:

    $offset = 0;
    $porPag = 10;
    $sql = "SELECT * FROM clientes LIMIT ?, ?";
    $result = $pdo->prepare($sql);
    $result->execute(array($offset, $porPag));

La orden *execute* da error porque sustituye los parámetros entrecomillandolos. En el LIMIT no se permite las comillas.

  - Solución 1: `$sql = "SELECT * FROM clientes LIMIT $offset, $porPag";`
  - Solución 2: Sustituir los parámetros con el método `PDOStatement::bindValue` indicando que el tipo de datos es un número entero.
