/* Ejemplos de disparadores */

CREATE DATABASE  IF NOT EXISTS  bd_disparadores
  CHARACTER SET utf8
  COLLATE utf8_general_ci;

USE bd_disparadores;

CREATE TABLE productos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50),
  precio DECIMAL(8,2)
);

CREATE TABLE historico (
  producto_id INT,
  precio DECIMAL(8,2),
  fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DELIMITER $$
CREATE TRIGGER validarPrecio BEFORE INSERT
  ON productos FOR EACH ROW
BEGIN
  IF NEW.precio NOT BETWEEN 0 AND 100 THEN
    SET NEW.precio = NULL;
  END IF;
END$$
CREATE TRIGGER historialPrecio AFTER INSERT
  ON productos FOR EACH ROW
BEGIN
  INSERT INTO historico (producto_id, precio)
    VALUES (NEW.id, NEW.precio);
  /*INSERT INTO historico (producto_id, precio)
    SELECT id, precio
    FROM productos
    WHERE id = NEW.id;*/
END$$
CREATE TRIGGER historialPrecioCambiado AFTER UPDATE
  ON productos FOR EACH ROW
BEGIN
  INSERT INTO historico (producto_id, precio)
    VALUES (NEW.id, NEW.precio);
END$$
DELIMITER ;

INSERT INTO productos VALUES (NULL, 'Abrelatas', 10);
INSERT INTO productos VALUES (NULL, 'Buzón', 200);
UPDATE productos SET precio = 15 WHERE nombre = 'Abrelatas';
