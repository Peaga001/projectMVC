CREATE DATABASE PDOTeste;

CREATE TABLE Users(

	id int(30) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	login varchar(100) UNIQUE NOT NULL,
	senha varchar(100) NOT NULL,
	nome varchar(100) NOT NULL,
	cpf varchar(11) NOT NULL,
	data_cadastro DATE NOT NULL,
	agencia varchar(4) NOT NULL,
	conta varchar(100) NOT NULL

);


INSERT INTO Users (login,senha,nome,cpf,data_cadastro,agencia,conta) 
VALUES ('pedroLogin','pedroSenha','Pedro','12345678910',Now(),'0001','1'),
       ('mariLogin','mariSenha','Mariana','12345678911',Now(),'0001','2'),
	   ('zecaLogin','zecaSenha','Zeca','12345678912',Now(),'0001','3'),
	   ('chicoLogin','chicoSenha','Chico','12345678913',Now(),'0001','4'),
	   ('brendaLogin','brendaSenha','Brenda','12345678914',Now(),'0001','5'),
	   ('oliviaLogin','oliviaSenha','Olivia','12345678915',Now(),'0001','6'),
	   ('vanessaLogin','vanessaSenha','Vanessa','12345678916',Now(),'0001','7'),
	   ('luanaLogin','luanaSenha','Luana','12345678917',Now(),'0001','8'),
	   ('brenoLogin','brenoSenha','Breno','12345678918',Now(),'0001','9'),
	   ('brunoLogin','brunoSenha','Bruno','12345678919',Now(),'0001','10');
	   
CREATE TABLE Saldo(

	id_saldo int  PRIMARY KEY AUTO_INCREMENT NOT NULL,
	saldo varchar(100) NOT NULL,
	credito varchar(100) NOT NULL
);
	   
	   
	   
	INSERT into Saldo 
	(id_saldo,saldo,credito)
	VALUES
	(1200,50),
	(3800,1200),
	(1800,500),
	(1200,3500),
	(389,1220),
	(3852,1920),
	(3870,1020),
	(9000,1020),
	(125,1230),
	(338,800),
	(950,1800),
	(150,3500);

/*

	ALTERAR ARQUIVO HOST PARA 
	HOST=localhost
	DBNAME=PDOTeste
	USER=root
	SENHA=’’
*/
