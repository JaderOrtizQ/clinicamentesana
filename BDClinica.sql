/*
	CRUD con PostgreSQL y PHP
*/
CREATE TABLE clinica(
	id serial primary key,
	nombre varchar(50) NOT NULL,
	apellido varchar(50) NOT NULL,
	cedula varchar(10) NOT NULL,
	edad varchar(3) NOT NULL
);

insert into clinica
(nombre, apellido, cedula, edad)
values
('Duvan', 'Paz', '10101010', 3),
('Marlon', 'Mera', '20202020', 2),
('Olga', 'Ul', '4645454', 2),
('James', 'Gomez', '6464646', 1),
('Ronaldo', 'Alegrias', '85825824', 1);