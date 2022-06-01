create database lista;

use lista;

create table agenda(
    id_agenda int not null auto_increment,
    nome varchar(50) not null,
    apelido varchar(40) not null,
    endereco varchar(70) not null,
    bairro varchar(50) not null,
    cidade varchar(50) not null,
    estado varchar(02) not null,
    telefone varchar(15) not null,
    celular varchar(15) not null,
    email varchar(70) not null,
    dt_cadastro date not null,
    foto_blob           blob,
    foto_nome           varchar(100),
    PRIMARY KEY(id_agenda)
    
)