DROP TABLE riders CASCADE;
DROP TABLE drivers CASCADE;
DROP TABLE rides CASCADE;

CREATE TABLE riders
( id       SERIAL      NOT NULL PRIMARY KEY
, name     VARCHAR(80) NOT NULL
, password VARCHAR(80) NOT NULL
, email    VARCHAR(80) NOT NULL
, phone    INT         NOT NULL
);

CREATE TABLE drivers
( id     SERIAL      NOT NULL PRIMARY KEY
, name   VARCHAR(80) NOT NULL
, email  VARCHAR(80) NOT NULL
, phone  INT         NOT NULL
);

CREATE TABLE rides
( id            SERIAL       NOT NULL PRIMARY KEY
, location      VARCHAR (80) NOT NULL
, destination   VARCHAR (80) NOT NULL
, date          INT          NOT NULL
, time          INT          NOT NULL
, driver_id     INT          NOT NULL REFERENCES drivers(id)
, rider_id      INT          NOT NULL REFERENCES riders(id)
);

SELECT * FROM drivers;
SELECT * FROM riders;
SELECT * FROM rides;

INSERT INTO drivers (name, email, phone) VALUES ('John'  , 'johnsemail@google.com' , '2084962222');
INSERT INTO drivers (name, email, phone) VALUES ('Anna'  , 'annasemail@google.com' , '2084963333');
INSERT INTO drivers (name, email, phone) VALUES ('Bruce' , 'brucesemail@google.com', '2084964444');

INSERT INTO riders (name, password, email, phone) VALUES ('Caden'  , 'jrkls09fd', 'cadensemail@google.com', '2084965990');
INSERT INTO riders (name, password, email, phone) VALUES ('Frank'  , 'W0aHe#4$o', 'franksemail@google.com', '2084963764');
INSERT INTO riders (name, password, email, phone) VALUES ('Jenny'  , 'tr7&fffks', 'jennysemail@google.com', '2084960003');

INSERT INTO rides (location, destination, date, time, driver_id, rider_id) VALUES ('Provo', 'Rexburg', '20200220', '1830', '1', '1');
INSERT INTO rides (location, destination, date, time, driver_id, rider_id) VALUES ('Rexburg', 'Salt Lake City', '20200315', '0500', '1', '2');
INSERT INTO rides (location, destination, date, time, driver_id, rider_id) VALUES ('Rexburg', 'Logan', '20200229', '1200', '2', '3');

SELECT * FROM drivers;
SELECT * FROM riders;
SELECT * FROM rides;