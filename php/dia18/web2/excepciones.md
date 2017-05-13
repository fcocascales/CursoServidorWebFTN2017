Excepciones
===========

Las excepciones se pueden crear, se pueden lanzar y se pueden recoger.

## Crear una excepción

    $ex = new Exception('Mensaje de error');

## Lanzar una excepción

    throw $ex;

## Recoger la excepción

    try {

      // Código que puede que tenga
      //  excepciones

    }
    catch (Exception $ex) {

      // Si se ha lanzado alguna excepción
      //   aquí es donde se atrapa

    }
