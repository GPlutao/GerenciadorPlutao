CREATE DATABASE gerenciador;

USE gerenciador;

CREATE TABLE professores(
matricula_prof INT(50) PRIMARY KEY NOT NULL,
nome_prof VARCHAR(100) NOT NULL,
email_prof VARCHAR(100) NOT NULL,
senha_prof VARCHAR(20) NOT NULL,
carga_horaria INT(10)
);

CREATE TABLE aluno(
matricula_aluno INT PRIMARY KEY NOT NULL, 
nome_aluno VARCHAR(100) NOT NULL,
email_aluno VARCHAR (100) NOT NULL,
senha_aluno VARCHAR (20) NOT NULL,
id_turma INT(10) NOT NULL,
idade_aluno INT(5) NOT NULL,
cpf_aluno CHAR (50) NOT NULL,
presenca INT(10) 
);

CREATE TABLE frequecia(
nome_aluno VARCHAR(100) NOT NULL,
matricula_prof INT(50) NOT NULL,
dia_aula DATE NOT NULL,
qtd_aula INT(5) NOT NULL,
id_turma INT(10) NOT NULL,
disciplina VARCHAR(30) NOT NULL,
conteudo VARCHAR(100) 
);

CREATE TABLE notas(
nome_aluno VARCHAR(100) NOT NULL,
id_turma INT(10) NOT NULL,
disciplina VARCHAR(30) NOT NULL,
nota_bimestre_1 INT(10) NOT NULL,
nota_bimestre_2 INT(10) NOT NULL,
nota_bimestre_3 INT(10) NOT NULL,
nota_bimestre_4 INT(10) NOT NULL,
recuperacao INT(10) NOT NULL,
nota_final INT(10) NOT NULL
);



INSERT INTO professores(nome_Prof, matricula_Prof, email_prof, senha_prof)
VALUES
('Maria das Dores','2020123','das_dores@gmail.com','dorflex'),
('José Monteiro', '2020321','ze_piaui@hotmail.com','motoca123'),
('Margarida Silva','2020456','marg.silva@gmail.com','florzinha'),
('Beijamim Oliveira', '2020765', 'beija-flor@gmail.com','rj45'),
('Blue Yang','2020098','YangBlue@yxt.com','karate');


INSERT INTO aluno(matricula_aluno, nome_aluno, email_aluno, senha_aluno, id_turma, idade_aluno, cpf_aluno)
VALUES
('024110023', 'Marcelo Felipe', 'marcelo@hotmail.com', 'marcelo746', '0001', '18', '746.004.365-65'),
('024110013', 'Julia Assumpção', 'julia@hotmail.com', 'julia457', '0001', '17', '457.345.771-98'),
('024110017', 'Victor Guilherme', 'victor@hotmail.com', 'victor625', '0001', '20', '625.471.325-74'),
('024110008', 'Ana Lucia', 'ana@hotmail.com', 'ana625', '0001', '19', '678.545.254-47'),
('024110030', 'Mario Davi', 'mario@hotmail.com', 'mario634', '0001', '22', '634.474.575-21');





