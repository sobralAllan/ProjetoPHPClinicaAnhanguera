create database clinicaVeterinaria; -- Criação do banco

use clinicaVeterinaria; -- Utilizar o banco clinica veterinaria

create table veterinario(
	codigo int not null auto_increment primary key, 
    nome varchar(250) not null,
    especialidade varchar(100) not null,
    salario decimal(10,2) not null,
    endereco varchar(300) not null,
    telefone varchar(20) not null
)engine = InnoDB; -- Construção do banco em tabelas

select * from veterinario;-- Visualizar os dados do banco