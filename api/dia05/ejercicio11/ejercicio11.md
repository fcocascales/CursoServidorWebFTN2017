Ejercicio 11
============

Muestra los dinosaurios herbívoros en un archivo JSON.

La *bd_mesozoico* tiene las tablas *dinosaurios* y *dietas*.

La siguiente consulta muestra la información requerida:

    SELECT nombre, longitud
    FROM dinosaurios
      INNER JOIN dietas ON dieta_id = dietas.id
    WHERE dieta = 'herbivoro'
    ORDER BY nombre;

Si fuese REST:
  - GET http://servidor/mesozoico/dinosaurios/herbivoros    
  - GET http://servidor/mesozoico/dinosaurios?dieta=herbivoro

Crea una página llamada **herbivoros.json.php** que genere un JSON de la consulta SQL anterior. Usa la clase *PDO* y su método *fetchAll*. Usa también la función *json_encode*.

    [
      {
        "nombre":"Braquiosaurio",
        "longitud":26
      },
      {
        "nombre":"Júpitersaurio",
        "longitud":null
      },
      ...    
    ]
