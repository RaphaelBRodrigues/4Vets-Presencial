create database Catchuro;
use Catchuro;
/*
CREATE USER '4vets'@'localhost' IDENTIFIED BY '4vets';
GRANT ALL PRIVILEGES ON *.* TO '4vets'@'localhost';
*/
create table Marca(
MarcaID int,
Nome varchar(30),
primary key(MarcaID)

);

create table Representante(
RepresentanteID int auto_increment,
Nome varchar(30) unique not null,
Senha varchar(30) not null,
Email varchar(80) not null,
Telefone int(9) not null,
MarcaID int(2) not null,
primary key(RepresentanteID),
foreign key(MarcaID) references Marca(MarcaID)

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
RepresentanteID int(5) not null,
primary key(ClienteID),
foreign key(RepresentanteID) references Representante(RepresentanteID)
);

create table Ramo(
RamoID int,
NomeRamo varchar(30),
primary key(RamoID)
);

create table ClienteRamo(
ClienteID int,
RamoID int,
foreign key(ClienteID) references Cliente(ClienteID),
foreign key(RamoID) references Ramo(RamoID)
);


INSERT INTO Marca values(1,'Marca 1');
INSERT INTO Marca values(2,'Marca 2');
INSERT INTO Marca values(3,'Marca 3');
INSERT INTO Marca values(4,'Marca 4');
INSERT INTO Marca values(5,'Marca 5');

create table Produtos(
ProdutoID int auto_increment,
Nome varchar(50),
Descricao varchar(500),
descricaoCurta varchar(100),
MarcaID int,
Preco float,
Estoque int,
Status int default 1,
primary key(ProdutoID),
foreign key(MarcaID) references Marca(MarcaID)

);


INSERT INTO Produtos values(null,
'Produto 1',
'Lorem ipsum dolor sit amet consectetur adipiscing elit duis porta nibh sagittis mus congue, habitasse ligula nullam scelerisque feugiat commodo magna luctus vivamus integer ridiculus. Maecenas auctor dictum habitant cursus aliquam gravida tempus lobortis dignissim imperdiet habitasse ridiculus vitae, a ultricies sollicitudin magna luctus pretium ultrices ut fusce posuere sem vel. Urna eget enim blandit auctor sem suspendisse amet, gravida ipsum taciti semper magna lacinia scelerisque, nascetur tincidunt hendrerit eleifend duis neque. Curabitur diam non sed torquent ut ante sit taciti, penatibus maximus habitant pharetra per ultricies maecenas nisi, posuere sapien vitae donec eu sagittis accumsan. Semper litora erat penatibus integer vulputate tristique quam adipiscing, mi nostra orci porttitor felis netus est cras, auctor curabitur ultricies aenean libero mattis magna. Faucibus vulputate nullam feugiat ornare primis elementum augue pretium, venenatis commodo tellus senectus malesuada egestas gravida aliquam quisque, sodales magnis in natoque at netus donec. Penatibus nec morbi vel mus aenean rutrum finibus purus quis mattis iaculis conubia, dis et dictumst non semper congue porttitor litora cras ridiculus.',
'Lorem ipsum dolor sit amet consectetur adipiscing elit duis porta nibh sagittis mus congue, habitasse ligula nullam scelerisque feugiat commodo magna luctus vivamus integer ridiculus. Maecenas auctor dictum habitant cursus aliquam gravida tempus lobortis dignissim imperdiet habitasse ridiculus vitae, a ultricies sollicitudin magna luctus pretium ultrices ut fusce posuere sem vel. Urna eget enim blandit auctor sem suspendisse amet, gravida ipsum taciti',
1,23.5,100,1
);



INSERT INTO Produtos values(null,
'Produto 2',
'Lorem ipsum dolor sit amet consectetur adipiscing elit duis porta nibh sagittis mus congue, habitasse ligula nullam scelerisque feugiat commodo magna luctus vivamus integer ridiculus. Maecenas auctor dictum habitant cursus aliquam gravida tempus lobortis dignissim imperdiet habitasse ridiculus vitae, a ultricies sollicitudin magna luctus pretium ultrices ut fusce posuere sem vel. Urna eget enim blandit auctor sem suspendisse amet, gravida ipsum taciti semper magna lacinia scelerisque, nascetur tincidunt hendrerit eleifend duis neque. Curabitur diam non sed torquent ut ante sit taciti, penatibus maximus habitant pharetra per ultricies maecenas nisi, posuere sapien vitae donec eu sagittis accumsan. Semper litora erat penatibus integer vulputate tristique quam adipiscing, mi nostra orci porttitor felis netus est cras, auctor curabitur ultricies aenean libero mattis magna. Faucibus vulputate nullam feugiat ornare primis elementum augue pretium, venenatis commodo tellus senectus malesuada egestas gravida aliquam quisque, sodales magnis in natoque at netus donec. Penatibus nec morbi vel mus aenean rutrum finibus purus quis mattis iaculis conubia, dis et dictumst non semper congue porttitor litora cras ridiculus.',
'Lorem ipsum dolor sit amet consectetur adipiscing elit duis porta nibh sagittis mus congue, habitasse ligula nullam scelerisque feugiat commodo magna luctus vivamus integer ridiculus. Maecenas auctor dictum habitant cursus aliquam gravida tempus lobortis dignissim imperdiet habitasse ridiculus vitae, a ultricies sollicitudin magna luctus pretium ultrices ut fusce posuere sem vel. Urna eget enim blandit auctor sem suspendisse amet, gravida ipsum taciti',
5,23.5,10,1
);


INSERT INTO Produtos values(null,
'Produto 3',
'Lorem ipsum dolor sit amet consectetur adipiscing elit duis porta nibh sagittis mus congue, habitasse ligula nullam scelerisque feugiat commodo magna luctus vivamus integer ridiculus. Maecenas auctor dictum habitant cursus aliquam gravida tempus lobortis dignissim imperdiet habitasse ridiculus vitae, a ultricies sollicitudin magna luctus pretium ultrices ut fusce posuere sem vel. Urna eget enim blandit auctor sem suspendisse amet, gravida ipsum taciti semper magna lacinia scelerisque, nascetur tincidunt hendrerit eleifend duis neque. Curabitur diam non sed torquent ut ante sit taciti, penatibus maximus habitant pharetra per ultricies maecenas nisi, posuere sapien vitae donec eu sagittis accumsan. Semper litora erat penatibus integer vulputate tristique quam adipiscing, mi nostra orci porttitor felis netus est cras, auctor curabitur ultricies aenean libero mattis magna. Faucibus vulputate nullam feugiat ornare primis elementum augue pretium, venenatis commodo tellus senectus malesuada egestas gravida aliquam quisque, sodales magnis in natoque at netus donec. Penatibus nec morbi vel mus aenean rutrum finibus purus quis mattis iaculis conubia, dis et dictumst non semper congue porttitor litora cras ridiculus.',
'Lorem ipsum dolor sit amet consectetur adipiscing elit duis porta nibh sagittis mus congue, habitasse ligula nullam scelerisque feugiat commodo magna luctus vivamus integer ridiculus. Maecenas auctor dictum habitant cursus aliquam gravida tempus lobortis dignissim imperdiet habitasse ridiculus vitae, a ultricies sollicitudin magna luctus pretium ultrices ut fusce posuere sem vel. Urna eget enim blandit auctor sem suspendisse amet, gravida ipsum taciti',
3,42.5,320,1
);


create table Carrinho(
logCarrinho int auto_increment,
ProdutoID int,
Quantidade int,
Nome varchar(40),
sessaoID int,
primary key(logCarrinho),
foreign key(ProdutoID) references Produtos(ProdutoID)
);


select * from Carrinho inner join Produtos where Carrinho.ProdutoID = Produtos.ProdutoID;


