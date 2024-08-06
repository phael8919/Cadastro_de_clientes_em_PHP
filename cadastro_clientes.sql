create database clientes_cadastro;

use clientes_cadastro;

create table cadastro_cliente(
	id_cliente int not null auto_increment primary key,
    nome_cliente varchar(30) not null,
    telefone varchar(12) not null,
    email varchar(40) not null,
    cpf varchar(11) not null,
    data_nascimento date not null
);

insert into cadastro_cliente(nome_cliente, telefone, email, cpf, data_nascimento) 
values('Fulano de tal','31999784561','fulano@email.com','99978945612','1991-05-01');

select * from cadastro_cliente;