create database Catchuro;
use Catchuro;

CREATE USER '4vets'@'localhost' IDENTIFIED BY '4vets';
GRANT ALL PRIVILEGES ON *.* TO '4vets'@'localhost';

create table Representante(
RepresentanteID int auto_increment,
Nome varchar(30) unique not null,
Senha varchar(30) not null,
Email varchar(80) not null,
Telefone int(9) not null,
primary key(RepresentanteID)
);



create table Cliente(
ClienteID int auto_increment,
Nome varchar(80) unique not null,
Senha varchar(30) not null,
Email varchar(80) not null,
Tel varchar(9) not null,
NomeFantasia varchar(20) not null,
Ramo varchar(20) not null,
CPF int(11) not null,
CNPJ int(11) not null,
CEP int(8) not null,
Numero int(9) not null,
Complemento varchar(30) not null,
Marca int(2) not null,
RepresentanteID int(5) not null,
primary key(ClienteID),
foreign key(RepresentanteID) references Representante(RepresentanteID)
);
