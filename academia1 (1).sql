-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Fev-2023 às 17:26
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `academia1`
--
CREATE DATABASE IF NOT EXISTS `academia1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `academia1`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `MATRICULA` int(11) NOT NULL,
  `NOME` varchar(60) NOT NULL,
  `TELEFONE` varchar(15) NOT NULL,
  `CPF` char(14) NOT NULL,
  `RG` varchar(15) NOT NULL,
  `DATANASCIMENTO` date NOT NULL,
  `CEP` char(9) NOT NULL,
  `NUMEROCASA` smallint(6) NOT NULL,
  `COMPLEMENTO` varchar(30) DEFAULT NULL,
  `FOTO` varchar(255) DEFAULT NULL,
  `SEXO` char(1) NOT NULL,
  `EMAILALUNO` varchar(40) NOT NULL,
  `SENHA` varchar(255) NOT NULL,
  `STATUS` char(1) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`MATRICULA`, `NOME`, `TELEFONE`, `CPF`, `RG`, `DATANASCIMENTO`, `CEP`, `NUMEROCASA`, `COMPLEMENTO`, `FOTO`, `SEXO`, `EMAILALUNO`, `SENHA`, `STATUS`) VALUES
(1, 'JOÃO PEDRO OLIVEIRA', '(21)99036-7137', '145.585.787-09', '25.325.255-8', '2020-12-14', '23040-550', 2355, 'BLOCO6 APTO 506', '../fotos/63d96ac513eff.jpg', 'F', 'jpoliver@gmail.com', 'testando123', 'A'),
(2, 'JULIE QUINTANILHA', '(21)99036-7137', '145.875.987-09', '25.625.805-6', '2013-01-01', '21775-430', 325, 'CASA 2', 'https://randomuser.me/api/portraits/women/30.jpg', 'F', 'juliequinta@gmail.com', 'testando123', 'A'),
(3, 'Romeu Andrade', '(21)98569-5659', '154.897.698-00', '4659', '1990-05-10', '23040550', 1, 'Não tem', '../fotos/63d9479681e50.jpg', 'M', 'romeoandra@yahoo.com.br', '$2y$10$vNqUt0jwYEVBTBxLvwHWT.r3xXRMH/zK6v5eNkQce0bzB2kE3ZnOS', 'A'),
(4, 'Cora Lima', '(21)98565-9466', '125.697.951-60', '169549', '2005-05-05', '21775430', 5, 'Casa 3', '../fotos/63d947e5e0c14.jpg', 'F', 'coral@gmail.com', '$2y$10$tpnTBWmC5RV.4xxqwD48.OKTQY.pRITdQ.8c.xEOfhk8VdQQTLmRO', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `IDATIVIDADE` int(11) NOT NULL,
  `NOMEATIVIDADE` varchar(60) NOT NULL,
  `DESCRICAO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`IDATIVIDADE`, `NOMEATIVIDADE`, `DESCRICAO`) VALUES
(1, 'SPINNING', 'Spinning é um treino que usa muito das articulações das pernas e, por isso, é capaz de proporcionar '),
(2, 'FUNCIONAL', 'A ginástica funcional é um método de atividade física baseada em movimentos do cotidiano, como levan');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE `aula` (
  `IDAULA` int(11) NOT NULL,
  `DATAAULA` date NOT NULL,
  `HORARIO` varchar(30) NOT NULL,
  `IDPROFESSOR` int(11) NOT NULL,
  `IDATIVIDADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aula`
--

INSERT INTO `aula` (`IDAULA`, `DATAAULA`, `HORARIO`, `IDPROFESSOR`, `IDATIVIDADE`) VALUES
(1, '2022-12-15', '10:00 às 11:00h', 1, 1),
(2, '2022-12-16', '14:00 às 15:00h', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulaaluno`
--

CREATE TABLE `aulaaluno` (
  `IDAULAALUNO` int(11) NOT NULL,
  `IDAULA` int(11) NOT NULL,
  `MATRICULA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aulaaluno`
--

INSERT INTO `aulaaluno` (`IDAULAALUNO`, `IDAULA`, `MATRICULA`) VALUES
(1, 1, 2),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `IDCATEGORIA` int(11) NOT NULL,
  `NOMECATEGORIA` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`IDCATEGORIA`, `NOMECATEGORIA`) VALUES
(1, 'roupa'),
(2, 'suplementos'),
(3, 'acessórios'),
(4, 'mochilas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `CPFFUNCIONARIO` char(14) NOT NULL,
  `NOME` varchar(60) NOT NULL,
  `TELEFONE` varchar(15) NOT NULL,
  `RG` varchar(15) NOT NULL,
  `CEP` char(9) NOT NULL,
  `NUMEROCASA` smallint(6) NOT NULL,
  `COMPLEMENTO` varchar(30) DEFAULT NULL,
  `FOTO` varchar(255) DEFAULT NULL,
  `SEXO` char(1) NOT NULL,
  `CARGO` varchar(40) NOT NULL,
  `EMAILFUNCIONARIO` varchar(40) NOT NULL,
  `SENHA` varchar(255) NOT NULL,
  `STATUS` char(1) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`CPFFUNCIONARIO`, `NOME`, `TELEFONE`, `RG`, `CEP`, `NUMEROCASA`, `COMPLEMENTO`, `FOTO`, `SEXO`, `CARGO`, `EMAILFUNCIONARIO`, `SENHA`, `STATUS`) VALUES
('005.522.985-44', 'ANDRÉ CASTRO ALVES', '(21)97484-8566', '27.327.205-1', '21775-430', 55, 'CASA 9', 'https://randomuser.me/api/portraits/men/46.jpg', 'M', 'RECEPCIONISTA', 'andrecalves@bodymovement.com', 'testando123', 'A'),
('154.587.927-44', 'CARLOS JOSÉ RODRIGUES', '(21)98545-7899', '27.852.789-2', '21775-430', 25, 'CASA 3', 'https://randomuser.me/api/portraits/men/52.jpg', 'M', 'PROFESSOR', 'cjr@bodymovement.com', 'testando123', 'A'),
('171.875.952-55', 'JOANA SOUZA COSTA', '(21)98564-7254', '22.238.202-0', '23040-550', 33, 'APTO 36', 'https://randomuser.me/api/portraits/women/26.jpg', 'F', 'PROFESSORA', 'josouza@bodymovement.com', 'testando123', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `habilitaprofessor`
--

CREATE TABLE `habilitaprofessor` (
  `IDHABILITACAO` int(11) NOT NULL,
  `IDATIVIDADE` int(11) NOT NULL,
  `IDPROFESSOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `habilitaprofessor`
--

INSERT INTO `habilitaprofessor` (`IDHABILITACAO`, `IDATIVIDADE`, `IDPROFESSOR`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `CODIGOPRODUTO` int(11) NOT NULL,
  `NOME` varchar(60) NOT NULL,
  `COR` varchar(30) NOT NULL,
  `VALOR` double NOT NULL,
  `TAMANHO` char(2) NOT NULL,
  `QUANTIDADE` int(11) NOT NULL,
  `IDCATEGORIA` int(11) NOT NULL,
  `FOTO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`CODIGOPRODUTO`, `NOME`, `COR`, `VALOR`, `TAMANHO`, `QUANTIDADE`, `IDCATEGORIA`, `FOTO`) VALUES
(1, 'CONJUNTO IMPACT', 'ROSA', 270, 'M', 20, 1, ''),
(2, 'MACACÃO SCARLAT', 'VINHO', 280, 'G', 15, 1, ''),
(3, 'Mochila Grey', 'Cinza', 89.99, 'Un', 20, 4, '../produtos/63d968a905c5c.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `IDPROFESSOR` int(11) NOT NULL,
  `DISPONIBILIDADE` varchar(40) NOT NULL,
  `CPFFUNCIONARIO` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`IDPROFESSOR`, `DISPONIBILIDADE`, `CPFFUNCIONARIO`) VALUES
(1, 'TERÇA À QUINTA PARTE DA MANHÃ', '154.587.927-44'),
(2, 'SEGUNDA À SÁBADO O DIA TODO', '171.875.952-55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `IDVENDA` int(11) NOT NULL,
  `CPFFUNCIONARIO` char(14) NOT NULL,
  `CODIGOPRODUTO` int(11) NOT NULL,
  `QUANTIDADE` int(11) NOT NULL,
  `VALORVENDA` double NOT NULL,
  `DATA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`IDVENDA`, `CPFFUNCIONARIO`, `CODIGOPRODUTO`, `QUANTIDADE`, `VALORVENDA`, `DATA`) VALUES
(1, '005.522.985-44', 2, 2, 540, '2022-12-12'),
(2, '005.522.985-44', 2, 2, 560, '2022-12-12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`MATRICULA`);

--
-- Índices para tabela `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`IDATIVIDADE`);

--
-- Índices para tabela `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`IDAULA`),
  ADD KEY `IDPROFESSOR` (`IDPROFESSOR`),
  ADD KEY `IDATIVIDADE` (`IDATIVIDADE`);

--
-- Índices para tabela `aulaaluno`
--
ALTER TABLE `aulaaluno`
  ADD PRIMARY KEY (`IDAULAALUNO`),
  ADD KEY `MATRICULA` (`MATRICULA`),
  ADD KEY `IDAULA` (`IDAULA`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`IDCATEGORIA`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`CPFFUNCIONARIO`);

--
-- Índices para tabela `habilitaprofessor`
--
ALTER TABLE `habilitaprofessor`
  ADD PRIMARY KEY (`IDHABILITACAO`),
  ADD KEY `IDATIVIDADE` (`IDATIVIDADE`),
  ADD KEY `IDPROFESSOR` (`IDPROFESSOR`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`CODIGOPRODUTO`),
  ADD KEY `FK_CATEGORIA` (`IDCATEGORIA`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`IDPROFESSOR`),
  ADD KEY `CPFFUNCIONARIO` (`CPFFUNCIONARIO`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`IDVENDA`),
  ADD KEY `CPFFUNCIONARIO` (`CPFFUNCIONARIO`),
  ADD KEY `CODIGOPRODUTO` (`CODIGOPRODUTO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `MATRICULA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `atividade`
--
ALTER TABLE `atividade`
  MODIFY `IDATIVIDADE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `aula`
--
ALTER TABLE `aula`
  MODIFY `IDAULA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `aulaaluno`
--
ALTER TABLE `aulaaluno`
  MODIFY `IDAULAALUNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `IDCATEGORIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `habilitaprofessor`
--
ALTER TABLE `habilitaprofessor`
  MODIFY `IDHABILITACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `CODIGOPRODUTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `IDPROFESSOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `IDVENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `aula_ibfk_1` FOREIGN KEY (`IDPROFESSOR`) REFERENCES `professor` (`IDPROFESSOR`),
  ADD CONSTRAINT `aula_ibfk_2` FOREIGN KEY (`IDATIVIDADE`) REFERENCES `atividade` (`IDATIVIDADE`);

--
-- Limitadores para a tabela `aulaaluno`
--
ALTER TABLE `aulaaluno`
  ADD CONSTRAINT `aulaaluno_ibfk_1` FOREIGN KEY (`MATRICULA`) REFERENCES `aluno` (`MATRICULA`),
  ADD CONSTRAINT `aulaaluno_ibfk_2` FOREIGN KEY (`IDAULA`) REFERENCES `aula` (`IDAULA`);

--
-- Limitadores para a tabela `habilitaprofessor`
--
ALTER TABLE `habilitaprofessor`
  ADD CONSTRAINT `habilitaprofessor_ibfk_1` FOREIGN KEY (`IDATIVIDADE`) REFERENCES `atividade` (`IDATIVIDADE`),
  ADD CONSTRAINT `habilitaprofessor_ibfk_2` FOREIGN KEY (`IDPROFESSOR`) REFERENCES `professor` (`IDPROFESSOR`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `FK_CATEGORIA` FOREIGN KEY (`IDCATEGORIA`) REFERENCES `categoria` (`IDCATEGORIA`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`CPFFUNCIONARIO`) REFERENCES `funcionario` (`CPFFUNCIONARIO`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`CPFFUNCIONARIO`) REFERENCES `funcionario` (`CPFFUNCIONARIO`),
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`CODIGOPRODUTO`) REFERENCES `produto` (`CODIGOPRODUTO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
