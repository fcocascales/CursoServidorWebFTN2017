USE bd_neptuno;

/*
1. Crear una tabla llamada 'albaranes' con los siguientes campos:
  - Un campo **id** autonumérico y clave principal
  - Un campo **pedido_id** que sea clave única.
  - Un campo **fecha** obligatorio
  - Un campo **repartidor** de texto obligatorio
  - Un campo **receptor** de texto obligatorio
*/

DROP TABLE albaranes;

CREATE TABLE  albaranes (
  id         INT AUTO_INCREMENT PRIMARY KEY,
  pedido_id  INT                UNIQUE KEY,
  fecha      DATE        NOT NULL,
  repartidor VARCHAR(50) NOT NULL,
  receptor   VARCHAR(50) NOT NULL
);

CREATE TABLE  albaranes (
  id         INT AUTO_INCREMENT,
  pedido_id  INT,
  fecha      DATE        NOT NULL,
  repartidor VARCHAR(50) NOT NULL,
  receptor   VARCHAR(50) NOT NULL,
  --
  PRIMARY KEY (id),
  UNIQUE KEY (pedido_id)
);

/*
2. Crear una clave externa en la tabla 'albaranes' que
apunte a la tabla 'pedidos'. Si se borrase algún pedido se debería borrar automáticamente los albaranes asociados.
*/

ALTER TABLE albaranes
  ADD  FOREIGN KEY (pedido_id) REFERENCES pedidos(id)  ON DELETE CASCADE;

-- Prueba: 1) Añadir un pedido, 2) añadir un albarán del pedido y 3) borrar el pedido
INSERT INTO pedidos(cliente_id) VALUES (1);
SELECT LAST_INSERT_ID(); --  SELECT MAX(id) FROM pedidos; -- 11079
INSERT INTO albaranes VALUES (NULL, 11079, CURRENT_DATE(), 'X', 'Z');
DELETE FROM pedidos WHERE id = 11079;
SELECT * FROM albaranes;

/*
3. Añade dos albaranes a los pedidos 10250 y 10260. La fecha es hoy. El repartidor es 'Víctor' y el receptor es 'Jordi'.
*/

INSERT INTO albaranes (pedido_id, fecha, repartidor, receptor) VALUES
  (10250, '2017-04-18', 'Víctor', 'Jordi'),
  (10260, '2017-04-18', 'Víctor', 'Jordi');

INSERT INTO albaranes VALUES
  (NULL, 10250, '2017-04-18', 'Víctor', 'Jordi'),
  (NULL, 10260, '2017-04-18', 'Víctor', 'Jordi');

/*
4. Modifica el albarán del pedido 10250 para que la fecha sea de ayer y el receptor sea 'David'.
*/

UPDATE albaranes
  SET fecha = '2017-04-17', receptor = 'David'
  WHERE pedido_id = 10250;

/*
5. Borra el albarán del pedido 10250.
*/

DELETE FROM albaranes
  WHERE pedido_id = 10250;
