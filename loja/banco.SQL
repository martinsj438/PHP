CREATE DATABASE IF NOT EXISTS banco;
USE banco;

CREATE TABLE IF NOT EXISTS usuarios(id_usuario INT AUTO_INCREMENT PRIMARY KEY);
CREATE TABLE IF NOT EXISTS logado(id_logado INT AUTO_INCREMENT PRIMARY KEY);
	


CREATE TABLE IF NOT EXISTSprodutos(
	id_produto INT AUTO_INCREMENT PRIMARY KEY,
	descricao VARCHAR(40) NOT NULL, 
	imagem VARCHAR(40) NOT NULL,
	quantidade INT NOT NULL,
	preco FLOAT NOT NULL
);

INSERT INTO produtos(descricao,imagem,quantidade,preco) VALUES
	("produto 1","img/imagem001.jpg",10,1.10),
	("produto 2","img/imagem001.jpg",10,2.20),
	("produto 3","img/imagem001.jpg",10,3.30),
	("produto 4","img/imagem001.jpg",10,4.40),
	("produto 5","img/imagem001.jpg",10,5.50),
	("produto 6","img/imagem001.jpg",10,6.60);

CREATE TABLE IF NOT EXISTS Vendas(
	id_venda INT AUTO_INCREMENT PRIMARY KEY,
	codUsuario INT NOT NULL,
	total FLOAT NOT NULL,
	FOREIGN KEY (codUsuario) REFERENCES Usuarios(id_usuario)
);			

CREATE TABLE IF NOT EXISTS itemVenda(
	id_item INT AUTO_INCREMENT PRIMARY KEY,
	item INT NOT NULL,
	codProd INT NOT NULL,
	descricao VARCHAR(40) NOT NULL,
	imagem VARCHAR(40) NOT NULL,
	quantidae INT NOT NULL,
	valUnitario FLOAT NOT NULL,
	codVenda INT NOT NULL,
	FOREIGN KEY (codProd) REFERENCES produtos(id_produtos),
	FOREIGN KEY (codVenda) REFERENCES vendas(id_venda)
);		














/*SELECT * FROM usuario;

SELECT * FROM usuario WHERE id=1;

UPDATE * FROM usuario SET nome="alunos" WHERE id=3;

SELECT * FROM usuario WHERE id=2;

SELECT * FROM usuario;

SHOW DATABASES;

SHOW TABLES;*/



	