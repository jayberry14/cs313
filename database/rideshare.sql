DROP TABLE rides;
DROP TABLE riders;
DROP TABLE drivers;


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
, date          VARCHAR (80) NOT NULL
, time          VARCHAR (80) NOT NULL
, price         INT          NOT NULL
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

INSERT INTO rides (location, destination, date, time, price, driver_id, rider_id) 
            VALUES ('Provo', 'Rexburg', '02-20-2020', '18:30', '10', '1', '1');
INSERT INTO rides (location, destination, date, time, price, driver_id, rider_id)
            VALUES ('Rexburg', 'Salt Lake City', '03/15/2020', '05:00', '12', '1', '2');
INSERT INTO rides (location, destination, date, time, price, driver_id, rider_id)
            VALUES ('Rexburg', 'Logan', '02/29/2020', '12:00', '9', '2', '3');
INSERT INTO rides (location, destination, date, time, price, driver_id, rider_id)
            VALUES ('Rexburg', 'Provo', '02/21/2020', '11:30', '11', '1', '3');
INSERT INTO rides (location, destination, date, time, price, driver_id, rider_id)
            VALUES ('Salt Lake City', 'Rexburg', '03/17/2020', '11:30', '11', '1', '2');
INSERT INTO rides (location, destination, date, time, price, driver_id, rider_id)
            VALUES ('Boise', 'Rexburg', '02/21/2020', '9:30', '8', '3', '3');

SELECT * FROM drivers;
SELECT * FROM riders;
SELECT * FROM rides;