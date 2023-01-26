create database hotel;

use hotel;

create table admin(
    idAdmin int primary key auto_increment,
    nome varchar(50) not null,
    senha varchar(255) not null
   
);

create table quartos(
    idquarto int primary key auto_increment,
    nome varchar(50) not null,
    estado enum("livre","ocupado") not null,
    dtrentrada date not null,
    dtsaida date not null,
    quarto varchar(50) not null
);

create table cliente(
    idCliente int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(80) not null,
    telefone varchar(30) not null,
    sexo enum("m","f") not null,
    dtentrada date,
    dtsaida date,
    idquarto int,
    foreign key(idquarto) REFERENCES quartos(idquarto)
);



insert into quartos values(null,'Rafael','livre','30/01/2023','suite');
insert into quartos values(null,'Rafael1','ocupado','15/07/2023','suite de luxo');
insert into quartos values(null,'Rafael2','livre','20/04/2023','suite');
insert into quartos values(null,'Rafael3','ocupado','03/11/2023','quarto duplo standard');
select * from quartos;

insert into cliente values(null,'Rafael','rafael@teste','0000-0000','m','30/01/2023');
insert into cliente values(null,'Rafael','rafael@teste2','2000-0000','f','28/01/2023');
