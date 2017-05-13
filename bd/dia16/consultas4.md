Consultas 4 en bd_neptuno
=========================

## Realizar cambios en la estructura (CREATE/ALTER/DROP)

1. Crear una tabla llamada 'albaranes' con los siguientes campos:
  - Un campo **id** autonumérico y clave principal
  - Un campo **pedido_id** que sea clave única.
  - Un campo **fecha** obligatorio
  - Un campo **repartidor** de texto obligatorio
  - Un campo **receptor** de texto obligatorio

2. Crear una clave externa en la tabla 'albaranes' que
apunte a la tabla 'pedidos'. Si se borrase algún pedido se debería borrar automáticamente los albaranes asociados.

## Realizar cambios en los datos (INSERT/UPDATE/DELETE)

3. Añade dos albaranes a los pedidos 10250 y 10260. La fecha es hoy. El repartidor es 'Víctor' y el receptor es 'Jordi'.

4. Modifica el albarán del pedido 10250 para que la fecha sea de ayer y el receptor sea 'David'.

5. Borra el albarán del pedido 10250.
