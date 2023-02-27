create schema glossario_bilingue;

use glossario_bilingue;

create table admin_glossario(
	id_admin	integer auto_increment primary key,
    email		varchar(50),
    senha		char(32),
    data_acesso	date,
    hora_acesso	time
);

insert into admin_glossario values(1, 'glossario.informatica@farroupilha.ifrs.edu.br', '25f30b4501b4076f89d77e2eef77b20d', current_date(), current_time());

create table dados_glossario(
	id_termo integer auto_increment primary key,
    termo varchar(50) not null,
    sigla varchar(50),
    classe varchar(50) not null,
    plural varchar(50),
    traducao varchar(50),
    definicao varchar(510) not null,
    area varchar(50) not null,
    referencia varchar(300),
    autor varchar(150),
    dia date not null
);

