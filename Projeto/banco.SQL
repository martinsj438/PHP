CREATE DATABASE IF NOT EXISTS banco;

USE banco;

CREATE TABLE IF NOT EXISTS usuarios(
	id_usuario INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(40) NOT NULL,
	email VARCHAR(40) NOT NULL,
	usuario VARCHAR(40) NOT NULL,
	senha VARCHAR(40) NOT NULL
);

INSERT INTO usuarios(nome,email,usuario,senha) VALUES
	("administrador geral","adm@mail.com","admin","admin"),
	("professor","prof@mail.com","prof","1234"),
	("aluno","aluno@mail.com","aluno","1234");

CREATE TABLE IF NOT EXISTS logado(
	id_logado INT AUTO_INCREMENT PRIMARY KEY,
	estado BOOLEAN NOT NULL,
	id_usu INT NOT NULL,
	FOREIGN KEY (id_usu) REFERENCES usuarios(id_usuario)
);

INSERT INTO logado(id_logado, estado, id_usu) VALUES (NULL, true, 1);
INSERT INTO logado(id_logado, estado, id_usu) VALUES (NULL, true, 2);

CREATE TABLE IF NOT EXISTS produtos(
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
	
CREATE TABLE IF NOT EXISTS vendas(
	id_venda INT AUTO_INCREMENT PRIMARY KEY,
	codUsuario INT NOT NULL,
	total FLOAT NOT NULL,
	FOREIGN KEY (codUsuario) REFERENCES usuarios(id_usuario)
);

CREATE TABLE IF NOT EXISTS itemVenda(
	id_item INT AUTO_INCREMENT PRIMARY KEY,
	item INT NOT NULL,
	codProd INT NOT NULL,
    descricao VARCHAR(40) NOT NULL,
	imagem VARCHAR(40) NOT NULL,
    quantidade INT NOT NULL,
	valUnitario FLOAT NOT NULL,
	valTotal FLOAT NOT NULL,
	codVenda INT NOT NULL,
    FOREIGN KEY (codProd) REFERENCES produtos(id_produto),
	FOREIGN KEY (codVenda) REFERENCES vendas(id_venda)
);

/*SELECT * FROM usuario;
SELECT * FROM usuario WHERE id=1;
UPDATE usuario SET nome="alunos" WHERE id=3;
DELETE FROM usuario WHERE id=2;
DROP TABLE usuario;
SHOW DATABASES;
SHOW TABLES;*/
