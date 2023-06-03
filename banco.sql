create database banco;
use banco;

create table user(
	cd int primary key auto_increment,
	nome varchar(100),
	senha varchar(50),
	id_token varchar(255)
)

