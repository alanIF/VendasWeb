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
	valor_total float not null,
	data_venda text not null,
	primary key(id)
);

create table item_venda(
	id int auto_increment not null,
	id_produto int not null,
	id_venda int not null,
	qtd int not null,
	primary key(id),
	foreign key(id_produto) references produto(id),
	foreign key(id_venda) references venda(id)
);