Realizar cambios en la base de datos
====================================

Hay 3 tipos de cambios:
  - Insertar nuevos registros: INSERT INTO
  - Modificar registros existentes: UPDATE
  - Borrar registros: DELETE FROM

## Ejemplos de INSERT:
```sql

INSERT INTO dinosaurios(nombre) VALUES ('Empresaurio');

INSERT INTO dinosaurios(nombre, longitud) VALUES ('Camposaurio', 1000);

INSERT INTO dinosaurios(id, nombre, dieta_id, longitud)
  VALUES (65, 'Playasaurio', 100, 1800);

INSERT INTO dinosaurios
  VALUES (NULL, 'Plesiosaurio', NULL, NULL);

INSERT IGNORE INTO dinosaurios(nombre)
  VALUES ('Triceratops'), ('Elefantesaurio');

INSERT INTO dinosaurios(nombre, dieta_id)
  SELECT CONCAT(nombre,'saurio'), 100
  FROM bd_astros.planetas;

INSERT INTO dinosaurios(nombre, dieta_id, longitud)
  VALUES ('Mesasaurio', 100, 2000)
  ON DUPLICATE KEY UPDATE dieta_id=100, longitud=2000;

```
## Ejemplos de UPDATE:
```sql

UPDATE dinosaurios
  SET dieta_id = 200
  WHERE id = 1;

UPDATE dinosaurios
  SET dieta_id = 100
  WHERE dieta_id IS NULL;

UPDATE dinosaurios
  SET dieta_id = 300, longitud = 1000
  WHERE nombre = 'Triceratops';  

UPDATE dinosaurios
  SET nombre = 'Triceratops Rex'    
  WHERE nombre = 'Triceratops';

UPDATE dinosaurios
  SET id = 20
  WHERE id = 2;  

UPDATE dinosaurios
  SET longitud = longitud / 100
  WHERE TRUE;  

-- Incumple la integridad referencial (clave externa)
UPDATE dietas
  SET id = 2
  WHERE id = 200;  

```
## Ejemplos de DELETE FROM:
```sql

DELETE FROM dinosaurios
  WHERE id = 2;

-- Incumple la integridad referencial (clave externa)
DELETE FROM dietas
  WHERE id = 100;  


```
