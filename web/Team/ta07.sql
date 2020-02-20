DROP TABLE w07users;

CREATE TABLE w07users
(
    id SERIAL NOT NULL,
    username VARCHAR(100) NOT NULL, 
    pass_hash VARCHAR(100) NOT NULL
);