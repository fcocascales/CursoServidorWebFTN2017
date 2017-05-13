/*
  Disparadores de BD_Neptuno

  1) Al insertar una línea de detalle de pedido
    que copie el precio del producto. Ejemplo:

      INSERT INTO detalles(pedido_id, producto_id, precio_unidad, cantidad, descuento)
        VALUES (10248, 6, NULL, 1, 0);
      Lo que hará el disparador es poner el precio del producto 6
*/

DELIMITER $$
DROP TRIGGER  IF EXISTS  disparadorPrecioDetalle$$
CREATE TRIGGER disparadorPrecioDetalle
  BEFORE INSERT ON detalles FOR EACH ROW
BEGIN
  IF NEW.precio_unidad IS NULL THEN
    SET NEW.precio_unidad = (SELECT precio_unidad
      FROM productos WHERE id = NEW.producto_id);
  END IF;
END$$
DELIMITER ;
/*
  1) INSERT INTO detalles VALUES (1000, 6, NULL, 1, 0)
    - Se pone en marcha el disparador BEFORE
        NEW.pedido_id = 1000
        NEW.producto_id = 6
        NEW.precio_unidad = NULL
        NEW.cantidad = 1
        NEW.descuento = 0
    - Se ejecuta el código escrito para el disparador
    - Se guarda en la tabla:
        NEW.pedido_id = 1000
        NEW.producto_id = 6
        NEW.precio_unidad = 25 !!!
        NEW.cantidad = 1
        NEW.descuento = 0
*/

/*
  2) Al insertar un pedido que copie la dirección
    del cliente
*/
/*
  3) Al poner NULL el precio del detalle que lo copie del producto. Ejemplo:

      UPDATE detalles
        SET precio_unidad = NULL
        WHERE pedido_id = 1000 AND producto_id = 6;
*/
