Ejercicio de paginación de la tabla clientes
============================================

- La página se llamará **clientes.php**
- Muestra los clientes de 10 en 10.
- Hay enlaces a la página anterior y la página siguiente de resultados.

## Manos a la obra

- Obtener el parámetro GET de la página. Por omisión sería 1.
- Un SQL para obtener la página de resultados.
- Un SQL para obtener el número total de páginas.
- Un bucle que muestre los resultados.
- Muestra los enlaces a las otras páginas.
- Usa las siguientes variables:
  - **$pagina** = El número de página actual [1..N]
  - **$porPagina** = Número de resultados por página [10]
  - **$totalPags** = Número de páginas total que hay.
