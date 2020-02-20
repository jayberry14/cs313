DROP TABLE w07users;

CREATE TABLE w07users
(
    id SERIAL NOT NULL,
    username VARCHAR(30) NOT NULL, 
    pass_hash VARCHAR(30) NOT NULL
);