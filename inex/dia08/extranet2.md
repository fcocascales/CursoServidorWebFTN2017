Extranet 2: Continuación del frontend
=====================================

  1. Copiar **dia07/frontend** a **dia08/frontend**
  2. Crear la carpeta **dia08/database** que contenga el archivo **bd_extranet.sql**
  3. Crear el archivo **database/actualizacion1.sql** que tenga los UPDATE del cambios de nombre de categoría.
```sql
      UPDATE categorias SET categoria = 'Verduras' WHERE categoria = 'Frutas/Verduras';
      UPDATE categorias SET categoria = 'Cereales' WHERE categoria = 'Granos/Cereales';
      UPDATE categorias SET categoria = 'Pescado' WHERE categoria = 'Pescado/Marisco';
```      
  4. Cambiar el archivo **lib/categorias.php**. La función *obtenerCategorias()* llama directamente a la función *conexion()*
  5. Cambiar el archivo **template/head.php** para que se acomode a la función *obtenerCategorias()*

## Carpetas del frontend

  - **frontend** = Páginas web
    - **css** = Hojas de estilo
    - **img** = Imágenes
    - **js** = Código Javascript
    - **lib** = Library (biblioteca de funciones)
    - **mod** = Módulos
      - **fa** = Font-Awesome (iconos)
      - **slider** = Carrusel de fotos (por hacer)
    - **template** = Plantilla de las páginas

## Ir a la página de inicio

  - Al picar en el logo o en el título de la página que vaya a la página de inicio. Crear enlaces adecuados en el **template/head.php** y poner los estilos.
