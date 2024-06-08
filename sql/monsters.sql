-- Creacion de la base de datos
DROP DATABASE IF EXISTS pocket_monster;
CREATE DATABASE IF NOT EXISTS pocket_monster CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_as_Cs;
USE pocket_monster;


CREATE TABLE usuarios (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
  username VARCHAR(45) NOT NULL,
  password VARCHAR(45) NOT NULL,
  tipo SET('Usuario','Admin') NOT NULL
);

CREATE TABLE pokemon (
	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    altura FLOAT NOT NULL,
    peso FLOAT NOT NULL,
    sexo ENUM('Macho', 'Hembra', 'No se siente identificado') NOT NULL,
    habilidad VARCHAR(30)
);

-- Inserciones
INSERT INTO usuarios(username, password, tipo) VALUE ('admin', MD5('admin'), 'Admin');

INSERT INTO pokemon(nombre, altura, peso, sexo, habilidad) VALUES 
('Charizard', 1.7, 9.5, 'Macho', 'Mar llamas'),
('Pikachu', 0.4, 6, 'Hembra', 'Elec. Estática'),
('Vaporeon', 1, 29, 'No se siente identificado', 'Absorbe Agua');

-- Ver tablas
SELECT * FROM usuarios;
SELECT * FROM pokemon;