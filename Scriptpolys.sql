use bancosuporte;

create table usuarios (
	id_usuarios int auto_increment primary key,
	id_nome varchar(100) not null,
	id_email varchar(100) not null
);

create table chamado(
	id_chamado int auto_increment primary key,
	id_titulo varchar(100) not null,
	descricao TEXT,
	status varchar(30) default 'aberto',
	usuario_id int,

	FOREIGN KEY (usuario_id)
	REFERENCES usuarios(id_usuarios)
);

CREATE TABLE categoria(
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nome_categoria VARCHAR(50) NOT NULL
);

USE bancosuporte;
SHOW TABLES;
SHOW CREATE TABLE chamado;

