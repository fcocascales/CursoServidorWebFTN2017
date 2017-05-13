Sintaxis de una unión entre tablas
==================================

    SELECT p.campo, s.campo
    FROM tabla_principal p
      INNER JOIN tabla_secundaria s ON p.id = s.clave_id

Ejemplo con países y gobiernos.
  - La tabla principal es gobiernos
  - La tabla secundaria es paises porque tiene la clave externa gobierno_id


      SELECT g.gobierno, p.pais
      FROM gobiernos g
        INNER JOIN paises p ON g.id = p.gobierno_id;
