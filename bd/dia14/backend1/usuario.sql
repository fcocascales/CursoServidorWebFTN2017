/*
  Probar si el usuario y la contraseña
  son correctas
*/

SELECT id
FROM users
WHERE user='pepe'
  AND pass=SHA1('pepe')
  AND enabled IS TRUE;

SELECT id
FROM users
WHERE user='pepe'
  AND pass=SHA1('XXX')
  AND enabled IS TRUE;

/*
  Crear una función MySQL para obtener
  el id a partir del usuario y la contraseña.
  En caso de error da 0.

  Ejemplos:
    SELECT getUserId('pepe', 'pepe');
    SELECT getUserId('pepe', 'xxx');
*/
DELIMITER $$
DROP FUNCTION IF EXISTS getUserId$$
CREATE FUNCTION getUserId(
  inUser VARCHAR(20),
  inPass VARCHAR(40)
) RETURNS INT
BEGIN
  DECLARE myId INT;
  SELECT id INTO myId
    FROM users
    WHERE user = inUser
      AND pass = SHA1(inPass)
      AND enabled IS TRUE;
  /*IF myId IS NULL THEN
    RETURN 0;
  ELSE
    RETURN myId;
  END IF;*/
  RETURN COALESCE(myId, 0);
END$$
DELIMITER ;

/*
  Un procedimiento para obtener el nombre y el correo
  del usuario a partir del id

  CALL queryUser(1);
*/
DELIMITER $$
DROP PROCEDURE IF EXISTS queryUser$$
CREATE PROCEDURE queryUser (
  IN inId INT
)
BEGIN
  SELECT name, email
    FROM users
    WHERE id = inId;
END$$
DELIMITER ;
