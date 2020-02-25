create database sig_vendas;
use sig_vendas;

create table produto(
	id int auto_increment not null,
	nome text not null,
	preco float,
	primary key(id)
); 


create table venda(
	id int auto_increment not null,
	id_produto int not null,
	qtd int not null,
        
	primary key(id),
	foreign key(id_produto) references produto(id),
);