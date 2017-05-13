Tablas de verdad
================

## Valores numéricos como booleanos (lógicos)

  - El valor =0 es FALSE
  - El valor <>0 es TRUE (habitualmente se usa el 1)

## Operadores lógicos

  - **NOT** - Cambia TRUE por FALSE o viceversa
  - **AND** - Da TRUE sólo si todos los operandos son TRUE
  - **OR** - Da FALSE sólo si todos los operandos son FALSE
  - **XOR** - (o exclusivo) - Da TRUE si uno y solo uno de los operandos es TRUE

## Tablas de verdad  

    CREATE DATABASE bd_logica;
    USE bd_logica;
    CREATE TABLE tabla1 (a BOOLEAN, b BOOLEAN);
    INSERT INTO tabla1 VALUES
      (FALSE, FALSE),
      (FALSE, TRUE),
      (TRUE, FALSE),
      (TRUE, TRUE);

---      

    SELECT a, b, a AND b, a OR b, a XOR b, NOT (a XOR b)
    FROM tabla1;


## Lógica trivaluada (incluir el NULL)

Si usas el operando AND y uno de los operadores es FALSE toda la expresión da FALSE aunque el otro sea NULL.

Si usas el operando OR y uno de los operadores es TRUE toda la expresión da TRUE aunque el otro sea NULL.

    CREATE TABLE tabla2 (a BOOLEAN, b BOOLEAN);
    INSERT INTO tabla2 VALUES
      (NULL, NULL),
      (NULL, FALSE),
      (NULL, TRUE),
      (FALSE, NULL),
      (FALSE, FALSE),
      (FALSE, TRUE),
      (TRUE, NULL),
      (TRUE, FALSE),
      (TRUE, TRUE);

---

    SELECT a, b, a AND b, a OR b, a XOR b, NOT (a XOR b)
    FROM tabla2;
