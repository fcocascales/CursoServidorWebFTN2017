Sistema de autenticación para un Backend
========================================

## Conexión o login

  - Pedir un usuario y una contraseña.
  - Enviar un correo electrónico de confirmación.  
  - Enviar una clave al móvil.
  - Huella dactilar.
  - Reconocimiento facial.
  - DNIe

## Base de datos

  - Tabla de usuarios:
    - Id
    - Nombre completo
    - Usuario
    - Contraseña
    - Correo electrónico
    - Nivel de acceso
    - Bloqueado

## Contraseña

  - La contraseña no se debería guardar en claro.
  - Guardar el hash de la contraseña con MD5, SHA1. No se puede descifrar la contraseña. Actualmente no se recomienda este sistema. Ver [Safe Password Hashing](http://php.net/manual/en/faq.passwords.php#faq.passwords.fasthash)
  - Cifrar la contraseña (también se puede descifrar).



## Cómo crear una contraseña

Para dificultar el ataque por fuerza bruta:
  - Usar minúsculas, mayúsculas, números, símbolos
  - Que tenga bastante longitud.

Para evitar ataques por diccionario:
  - Evitar usar palabras o texto con sentido.

No poner datos personales:
  - Fecha
  - Nombre del hijo

No usar la misma contraseña para todo.  

## Aumentar la seguridad

  - Si pone mal la contraseña varias veces bloquear al usuario.

## Ejemplos

  Contraseña: HOLA

  - Cifrar desplazando una letra: IPMB
  - Descifrar sería disminuir una posición.

  - Hash: H=8, O=15, L=12, A=1 = La suma 36

  - SELECT MD5('hola'), SHA1('hola');
  - SELECT LENGTH(MD5('hola')), LENGTH(SHA1('hola'));
