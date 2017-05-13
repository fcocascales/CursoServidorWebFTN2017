Ejercicio 2
===========

Continuación de ejercicio1

## basedatos.php

  1. Crea una clase llamada BaseDatos y mete las funciones dentro de la clase para que sean métodos.
  2. Crea un atributo privado llamado $pdo e inicialízalo a null.
  3. Elimina el parámetro $pdo de todos los métodos y utiliza en su lugar el atributo $pdo.
  4. Haz que el método *conectar* sea privado.
  5. Haz que el código del método *conectar* se ejecute sólo si $pdo es null.
  6. En el resto de métodos pon como primera instrucción una llamada al método *conectar*

## prueba.php

  - Modifícalo para que use la clase BaseDatos.

## filtro_form.php (antes llamado filtro.php)

  - Renombra el archivo "filtro.php" como "filtro_form.php"
  - Modifícalo para que use la clase BaseDatos.

## filtro_enlaces.php

  - Dúplica el archivo "filtro_form.php" como "filtro_enlaces.php".
  - Elimina el formulario
  - Crea una lista de enlaces HTML a "resultado.php" para cada tipo de dieta.

## resultado.php

  - Modifícalo para que use la clase BaseDatos.

## index.php

  - Crea enlaces HTML a "prueba.php", "filtro_form.php" y "filtro_enlaces.php"
