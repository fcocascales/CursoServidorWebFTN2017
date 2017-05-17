URL
===

http://acme.com/dir1/dir2/pagina.php

- http:// - protocolo HTTP
- acme.com - el dominio (dirección del servidor)
- /dir/dir2/ - ruta (carpetas)
- pagina.php - archivo

http://uno.acme.com/dir1/dir2/pagina.php

http://dos.acme.com/dir4/otro.php

- acme.com - el dominio (se compra)
- uno - un subdominio
- dos - otro subdominio

http://es.wikipedia.org - Español

http://ca.wikipedia.org - Català

http://en.wikipedia.org - English

http://www.wikipedia.org - General

## Query string = Parámetros URL = Parámetros GET

Después del archivo se pueden añadir parámetros que el archivo puede obtener.

http://acme.com/dir1/dir2/pagina.php?lang=ca&filtro=uno&dato=10

El query string es: `?lang=ca&filtro=uno&dato=10`

  - El ? une el archivo con sus parámetros
  - Los & unen los parámetros
  - Cada parámetro es clave=valor
  - Los parámetros URL que hay:
    - lang => ca
    - filtro => uno
    - dato => 10
