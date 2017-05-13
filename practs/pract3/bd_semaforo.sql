CREATE DATABASE bd_semaforo
  CHARACTER SET utf8
  COLLATE utf8_general_ci;

USE bd_semaforo;

CREATE TABLE semaforos(
  id       INT PRIMARY KEY AUTO_INCREMENT,
  estado   VARCHAR(10) NOT NULL UNIQUE KEY,
  duracion INT         NOT NULL,
  hora     TIME        NOT NULL,
  actual   BOOLEAN     NOT NULL
);

INSERT INTO semaforos VALUES
  (1, 'rojo', 30, '10:00:00', TRUE),
  (2, 'verde', 20, '10:00:30', FALSE),
  (3, 'ambar', 2, '10:00:50', FALSE);
