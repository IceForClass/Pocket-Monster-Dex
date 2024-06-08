drop database if exists pocket_monster;
create database pocket_monster;

use pocket_monster;


CREATE TABLE usuarios (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  username VARCHAR(45),
  password VARCHAR(45),
  tipo SET ('Usuario','Admin')
);


INSERT INTO usuarios(username, password, tipo) VALUES
  ('admin', MD5('admin'), 'Admin');