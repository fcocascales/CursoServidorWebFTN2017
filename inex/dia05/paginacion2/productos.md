Ejercicio de paginación de productos con filtro
===============================================

Archivo **productos.php**

 - Un formulario `<form>` de búsqueda de productos por su nombre.
 - Muestra el resultado a **4** productos por página
 - Enlaces `<a>` a las páginas anterior y siguiente

Ejemplos de filtros SQL:
 - `SELECT * FROM productos WHERE producto LIKE '%queso%' LIMIT 0, 4`
 - `SELECT * FROM productos WHERE producto LIKE '%cerveza%' LIMIT 0, 4`

Consulta:  
```sql
    SELECT SQL_CALC_FOUND_ROWS
        p.producto, p.precio_unidad, c.categoria, r.empresa AS proveedor
      FROM productos p
        LEFT JOIN categorias c ON p.categoria_id = c.id
        LEFT JOIN proveedores r ON p.proveedor_id = r.id
      WHERE p.producto LIKE ?
      LIMIT $offset, $porPagina;

    SELECT FOUND_ROWS();
```

## Análisis

Para ir a una página se pueden hacer enlaces con parámetros GET. Por ejemplo `?pagina=3` pero faltaría indicar el filtro por nombre.

Para filtrar se puede hacer una formulario con el método GET.

Si enviamos el formulario, se trata de un nuevo filtro, hay que mostrar la página 1 de resultados. Se podría poner un campo oculto en el formulario con página 1.

En los enlaces de página `?pagina=3` hay que incluir también el filtro: `?pagina=3&nombre=queso`

**En resumen:** Tanto los enlaces como el formulario usan el método GET y envían dos parámetros: la *página* y el *nombre* a filtrar.

## Funciones que puedes necesitar

- La función **url_encode** codifica un texto para que pueda ir en la URL. Se debería usar con el filtro.

      echo "<a href=\"?pagina=$pagina&nombre=".url_encode($nombre) ...

- La función **http_build_query** codifica para URL un array asociativo.

      $assoc = array(
        'pagina'=> $pagina,
        'nombre'=> $nombre,      
      );
      echo "<a href=\"?".http_build_query($assoc) ...
