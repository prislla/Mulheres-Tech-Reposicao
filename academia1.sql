DROP DATABASE IF EXISTS ACADEMIA1;

CREATE DATABASE ACADEMIA1 CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI;

USE ACADEMIA1;

CREATE TABLE ENDERECO (
CEP CHAR(9) PRIMARY KEY,
RUA VARCHAR(60) NOT NULL,
BAIRRO VARCHAR(40) NOT NULL,
CIDADE VARCHAR(40) NOT NULL,
UF CHAR(2) NOT NULL);

CREATE TABLE ALUNO (
MATRICULA INTEGER PRIMARY KEY AUTO_INCREMENT,
NOME VARCHAR(60) NOT NULL,
TELEFONE VARCHAR(15) NOT NULL,
CPF CHAR(14) NOT NULL,
RG VARCHAR(15) NOT NULL,
DATANASCIMENTO DATE NOT NULL,
CEP CHAR(9) NOT NULL,
NUMEROCASA SMALLINT NOT NULL,
COMPLEMENTO VARCHAR(30),
FOTO VARCHAR(255),
SEXO CHAR (1) NOT NULL,
EMAILALUNO VARCHAR(40) NOT NULL,
SENHA VARCHAR(255) NOT NULL,
FOREIGN KEY(CEP) REFERENCES ENDERECO(CEP));

CREATE TABLE FUNCIONARIO (
CPFFUNCIONARIO CHAR (14) PRIMARY KEY,
NOME VARCHAR(60) NOT NULL,
TELEFONE VARCHAR(15) NOT NULL,
RG VARCHAR(15) NOT NULL,
CEP CHAR(9) NOT NULL,
NUMEROCASA SMALLINT NOT NULL,
COMPLEMENTO VARCHAR(30),
FOTO VARCHAR(255),
SEXO CHAR (1) NOT NULL,
CARGO VARCHAR(40) NOT NULL,
EMAILFUNCIONARIO VARCHAR(40) NOT NULL,
SENHA VARCHAR(255) NOT NULL,
FOREIGN KEY(CEP) REFERENCES ENDERECO(CEP));

CREATE TABLE PROFESSOR(
IDPROFESSOR INTEGER PRIMARY KEY AUTO_INCREMENT,
DISPONIBILIDADE VARCHAR(40) NOT NULL,
CPFFUNCIONARIO CHAR(14) NOT NULL,
FOREIGN KEY(CPFFUNCIONARIO) REFERENCES FUNCIONARIO(CPFFUNCIONARIO));

CREATE TABLE ATIVIDADE(
IDATIVIDADE INTEGER PRIMARY KEY AUTO_INCREMENT,
NOMEATIVIDADE VARCHAR(60) NOT NULL,
DESCRICAO VARCHAR(100) NOT NULL);

CREATE TABLE HABILITAPROFESSOR(
IDHABILITACAO INTEGER PRIMARY KEY AUTO_INCREMENT,
IDATIVIDADE INTEGER NOT NULL,
IDPROFESSOR INTEGER NOT NULL,
FOREIGN KEY (IDATIVIDADE) REFERENCES ATIVIDADE (IDATIVIDADE),
FOREIGN KEY (IDPROFESSOR) REFERENCES PROFESSOR (IDPROFESSOR));

CREATE TABLE AULA(
IDAULA INTEGER PRIMARY KEY AUTO_INCREMENT,
DATAAULA DATE NOT NULL,
HORARIO VARCHAR(30) NOT NULL,
IDPROFESSOR INTEGER NOT NULL,
IDATIVIDADE INTEGER NOT NULL,
FOREIGN KEY (IDPROFESSOR) REFERENCES PROFESSOR (IDPROFESSOR),
FOREIGN KEY (IDATIVIDADE) REFERENCES ATIVIDADE (IDATIVIDADE));

CREATE TABLE AULAALUNO (
IDAULAALUNO INTEGER PRIMARY KEY AUTO_INCREMENT,
IDAULA INTEGER NOT NULL,
MATRICULA INTEGER NOT NULL,
FOREIGN KEY (MATRICULA) REFERENCES ALUNO (MATRICULA),
FOREIGN KEY (IDAULA) REFERENCES AULA (IDAULA));

CREATE TABLE PRODUTO (
CODIGOPRODUTO INTEGER PRIMARY KEY AUTO_INCREMENT,
NOME VARCHAR (60) NOT NULL,
COR VARCHAR (30) NOT NULL,
VALOR DOUBLE NOT NULL,
TAMANHO CHAR (2) NOT NULL,
QUANTIDADE INTEGER NOT NULL);

CREATE TABLE VENDA (
IDVENDA INTEGER PRIMARY KEY AUTO_INCREMENT,
CPFFUNCIONARIO CHAR (14) NOT NULL,
CODIGOPRODUTO INTEGER NOT NULL,
QUANTIDADE INTEGER NOT NULL,
VALORVENDA DOUBLE NOT NULL,
DATA DATE NOT NULL,
FOREIGN KEY (CPFFUNCIONARIO) REFERENCES FUNCIONARIO (CPFFUNCIONARIO),
FOREIGN KEY (CODIGOPRODUTO) REFERENCES PRODUTO (CODIGOPRODUTO));


INSERT INTO ENDERECO
(CEP,RUA,BAIRRO,CIDADE,UF)

VALUES
('23040-550','ESTRADA DO MOINHO','CAMPO GRANDE','RIO DE JANEIRO','RJ'),
('21775-430','RUA CERIBA','PADRE MIGUEL','RIO DE JANEIRO','RJ');

INSERT INTO ALUNO
(NOME,TELEFONE,CPF,RG,DATANASCIMENTO,CEP,NUMEROCASA,COMPLEMENTO,FOTO,SEXO,EMAILALUNO, SENHA)

VALUES
('JOÃO PEDRO OLIVEIRA','(21)99036-7137','145.585.787-09','25.325.255-8','2020/12/14','23040-550','2355','BLOCO6 APTO 506','https://randomuser.me/api/portraits/men/7.jpg','MASCULINO','jpoliver@gmail.com','testando123'),
('JULIE QUINTANILHA','(21)99036-7137','145.875.987-09','25.625.805-6','2013/01/01','21775-430','325','CASA 2','https://randomuser.me/api/portraits/women/30.jpg','FEMININO','juliequinta@gmail.com','testando123');

INSERT INTO FUNCIONARIO 
(CPFFUNCIONARIO,NOME,TELEFONE,RG,CEP,NUMEROCASA,COMPLEMENTO,FOTO,SEXO,CARGO,EMAILFUNCIONARIO,SENHA)

VALUES
('154.587.927-44','CARLOS JOSÉ RODRIGUES','(21)98545-7899','27.852.789-2','21775-430','25','CASA 3','https://randomuser.me/api/portraits/men/52.jpg','MASCULINO','PROFESSOR','cjr@bodymovement.com','testando123'),
('171.875.952-55','JOANA SOUZA COSTA','(21)98564-7254','22.238.202-0','23040-550','33','APTO 36','https://randomuser.me/api/portraits/women/26.jpg','FEMININO','PROFESSORA','josouza@bodymovement.com','testando123'),
('005.522.985-44','ANDRÉ CASTRO ALVES','(21)97484-8566','27.327.205-1','21775-430','55','CASA 9','https://randomuser.me/api/portraits/men/46.jpg','MASCULINO','RECEPCIONISTA','andrecalves@bodymovement.com','testando123');

INSERT INTO PROFESSOR 
(DISPONIBILIDADE,CPFFUNCIONARIO)

VALUES
('TERÇA À QUINTA PARTE DA MANHÃ','154.587.927-44'),
('SEGUNDA À SÁBADO O DIA TODO','171.875.952-55');

INSERT INTO ATIVIDADE
(NOMEATIVIDADE,DESCRICAO)

VALUES
('SPINNING','Spinning é um treino que usa muito das articulações das pernas e, por isso, é capaz de proporcionar um bom rendimento físico, fazendo com que você 
consiga ter um enorme gasto de calorias. Os principais benefícios: trabalhar todo o condicionamento físico e muscular, principalmente das pernas e glúteos; 
ajudar a tonificar as veias e melhorar os movimentos, o que contribui para a redução da pressão arterial, diminuindo os riscos de doenças cardíacas.'),
('FUNCIONAL','A ginástica funcional é um método de atividade física baseada em movimentos do cotidiano, como levantar, agachar, puxar ou empurrar. O objetivo 
desses exercícios é fortalecer, definir, melhorar a flexibilidade e aumentar a resistência e o equilíbrio corporal para os movimentos do dia a dia.');

INSERT INTO HABILITAPROFESSOR
(IDATIVIDADE,IDPROFESSOR)

VALUES
('1','1'),
('2','2');

INSERT INTO AULA
(DATAAULA,HORARIO,IDPROFESSOR,IDATIVIDADE)

VALUES
('2022-12-15','10:00 às 11:00h','1','1'),
('2022-12-16','14:00 às 15:00h','2','2');

INSERT INTO AULAALUNO
(IDAULA,MATRICULA)

VALUES
('1','2'),
('2','1');

INSERT INTO PRODUTO
(NOME,COR,VALOR,TAMANHO,QUANTIDADE)

VALUES
('CONJUNTO IMPACT','ROSA','270','M','20'),
('MACACÃO SCARLAT','VINHO','280','G','15');

INSERT INTO VENDA
(CPFFUNCIONARIO,CODIGOPRODUTO,QUANTIDADE,VALORVENDA,DATA)

VALUES
('005.522.985-44','2','2','540','2022-12-12'),
('005.522.985-44','2','2','560','2022-12-12');
