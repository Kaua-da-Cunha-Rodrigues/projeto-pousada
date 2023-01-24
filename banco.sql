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

    dtreserva date not null
);
create table cliente(
    idcliente int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(80) not null,
    senha varchar(255) not null,
    sexo enum("m","f") not null,
    idade int not null
);



insert into quartos values(null,'Rafael','livre','30/01/2023');
insert into quartos values(null,'Rafael1','ocupado','15/07/2023');
insert into quartos values(null,'Rafael2','livre','20/04/2023');
insert into quartos values(null,'Rafael3','ocupado','03/11/2023');
select * from quartos;