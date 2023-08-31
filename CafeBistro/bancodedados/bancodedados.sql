create database cafe;
use cafe;
create table usuario (
	nome varchar(255),
	email varchar(255) primary key,
	senha varchar(255));
select * from usuario;

create table produtos (
	id int not null auto_increment,
	tipo varchar(45) not null,
	nome varchar(45)not null,
	descricao varchar(90) not null,
	imagem varchar (80) not null,
	preco decimal (5,2) not null,
primary key (id));
select* from produtos;
