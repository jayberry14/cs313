CREATE TABLE riders
(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(80) NOT NULL,
    password VARCHAR(80) NOT NULL,
    display_name VARCHAR(80) NOT NULL
);

CREATE TABLE drivers
(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(80) NOT NULL,
    display_name VARCHAR(80) NOT NULL
);

