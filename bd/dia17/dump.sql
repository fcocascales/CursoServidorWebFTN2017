PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE "viajes" (
    "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "destino" TEXT NOT NULL,
    "fecha" TEXT,
    "precio" INTEGER
);
INSERT INTO "viajes" VALUES(1,'París','2017-04-01',6202);
INSERT INTO "viajes" VALUES(2,'Valladolid','2017-04-01',8116);
INSERT INTO "viajes" VALUES(3,'Atenas','2017-04-01',5030);
INSERT INTO "viajes" VALUES(4,'Sevilla','2017-04-01',20326);
INSERT INTO "viajes" VALUES(5,'Brujas','2017-04-01',29011);
INSERT INTO "viajes" VALUES(6,'Londres','2017-04-01',30771);
INSERT INTO "viajes" VALUES(7,'Berlín','2017-04-01',6411);
INSERT INTO "viajes" VALUES(8,'Moscú','2017-04-01',25547);
INSERT INTO "viajes" VALUES(9,'Pekín','2017-04-01',21153);
INSERT INTO "viajes" VALUES(10,'Buenos Aires','2017-04-01',21520);
DELETE FROM sqlite_sequence;
INSERT INTO "sqlite_sequence" VALUES('viajes',10);
COMMIT;
