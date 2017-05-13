<?php
  // funciones.php

  /*
    Retorna true si la fecha tiene
    el formato correcto y es correcta
  */
  function validateDate($date, $format='Y-m-d')  {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
  }

  /*
    Retorna true si la fecha tiene
    el formato YYYY-MM-DD y es correcta
  */
  function getDateValidationMessage($fecha) {
    if (empty($fecha)) return "Fecha vacía";
    if (strlen($fecha) != 10) return "Fecha de longitud incorrecta";
    $guion1 = substr($fecha,4,1);
    $guion2 = substr($fecha,7,1);
    if ($guion1 != '-' || $guion2 != '-') return "Hay que separar la fecha con guiones";
    $año = intval(substr($fecha, 0, 4));
    $mes = intval(substr($fecha, 5, 2));
    $dia = intval(substr($fecha, 8, 2));
    if (!is_numeric(substr($fecha, 6, 1))) return "El mes de la fecha tiene un carácter incorrecto";
    if (!is_numeric(substr($fecha, 9, 1))) return "El día de la fecha tiene un carácter incorrecto";
    if ($año < 1900 || $año > 2100) return "El año de la fecha debe estar entre 1900 y 2100";
    if ($mes < 1 || $mes > 12) return "El mes de la fecha está fuera de rango";
    if ($dia < 1 || $dia > 31) return "El día de la fecha está fuera de rango";
    if (($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) && $dia > 30) return "El mes no puede tener más de 30 días";
    $bisiesto = esBisiesto($año);
    if ($bisiesto && $mes == 2 && $dia > 29) return "Es un año bisiesto y febrero no puede tener más de 29 días";
    if (!$bisiesto && $mes == 2 && $dia > 28) return "Febrero no puede tener más de 28 días";
    return "";
  }

  /*
    Retorna true cuando el año es bisiesto,
    es decir que febrero tiene 29 días

    SI ((año divisible por 4) Y ((año no divisible por 100) O (año divisible por 400)))
    ENTONCES es bisiesto
  */
  function esBisiesto($año) {
    if (($año % 4 == 0) && (($año % 100 != 0) || ($año % 400 == 0))) return true;
    else return false;
  }
