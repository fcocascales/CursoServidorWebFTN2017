Disparadores
============

[Trigger Syntax and Examples](https://dev.mysql.com/doc/refman/5.7/en/trigger-syntax.html)

  - Un disparador está asociado a una tabla.
  - Es un código que se ejecuta al hacer INSERT/UPDATE/DELETE en una tabla.

Creación de un disparador:
  - Borrar un disparador: DROP TRIGGER
  - Crear un disparador: CREATE TRIGGER

## Datos usados en el disparador:

  - **OLD.campo** - Datos antiguos en el disparador UPDATE o DELETE        
  - **NEW.campo** - Datos nuevos en el disparador UPDATE o INSERT  

## Momento de ejecución:

  - **BEFORE** - Antes de guardar los cambios en la BD.    
    - Los campos OLD son los datos guardados actualmente en la BD.
    - Los campos NEW son los datos que se intentan insertar o modificar pero que aun no han sido guardados.
    - Podemos cambiar los datos a guardar asignando un valor en un campo NEW.
    - El campo autoincremento NEW.id aun no tiene valor, valdrá 0.    

  - **AFTER** - Después de guardar los cambios en la BD.
    - Los campos OLD son los datos que anteriormente estaban guardados en la BD.
    - Los campos NEW son los datos actualmente guardados en la BD.
    - No podemos cambiar los campos NEW.
    - El campo autoincremento NEW.id contiene el valor correcto.

## Sintaxis

    DELIMITER $$

    DROP TRIGGER  IF EXISTS  nombre$$

    CREATE TRIGGER nombre
      AFTER|BEFORE
      INSERT|UPDATE|DELETE
      ON tabla
      FOR EACH ROW
    BEGIN
      ... 
    END$$

    DELIMITER ;
