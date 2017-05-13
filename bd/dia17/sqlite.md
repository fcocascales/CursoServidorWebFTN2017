SQLite
======

## Gestores de SQLite

  - [Sqliteman](https://sourceforge.net/projects/sqliteman/) — SQLite manager by Petr Vanek

  - [phpLiteAdmin](https://www.phpliteadmin.org/) — Parecido al phpMyAdmin

## Documentación

    - [SQLite documentation](https://sqlite.org/docs.html) — Programming Interfaces

## Características

  - Toda la base de datos está en un fichero dentro de la web
  - La BD se sube al servidor igual que las páginas PHP
  - Hacer una copia de seguridad es copiar el fichero de la BD

## PDO

Cadena de conexión: "sqlite:archivo_bd". No hay usuario ni contraseña.

    $pdo = new PDO("sqlite:acme.db");
