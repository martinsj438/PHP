CREATE DATABASE IF NOT EXISTS projeto_z;

USE projeto_z;

CREATE TABLE IF NOT EXISTS interessados(
	id_logado INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(40) NOT NULL,
	email VARCHAR(40) NOT NULL
);
 