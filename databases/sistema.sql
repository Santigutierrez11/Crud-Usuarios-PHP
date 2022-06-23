CREATE DATABASE IF NOT EXISTS asistem;

USE sistema;

CREATE TABLE datos 
( 
    id int(10) not null,
    nombre varchar (25),
    dirrecion varchar(25),
    telefono varchar(15),
    PRIMARY KEY (id) 
) Engine=InnoDB default charset=latin1; 