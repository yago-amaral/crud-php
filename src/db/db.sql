DROP DATABASE IF EXISTS crud_php;
CREATE DATABASE crud_php;
USE crud_php;

CREATE TABLE usuarios (
    id int unsigned PRIMARY KEY AUTO_INCREMENT,
    nome varchar(64) NOT NULL,
    email varchar(64) NOT NULL
);