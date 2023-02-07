CREATE DATABASE IF NOT EXISTS `academia1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `academia1`;



CREATE TABLE `aluno` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cpf` char(14) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `datanascimento` date NOT NULL,
  `cep` char(9) NOT NULL,
  `numerocasa` smallint(6) NOT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `sexo` char(1) NOT NULL,
  `emailaluno` varchar(40) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` char(1) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `aluno` (`matricula`, `nome`, `telefone`, `cpf`, `rg`, `datanascimento`, `cep`, `numerocasa`, `complemento`, `foto`, `sexo`, `emailaluno`, `senha`, `status`) VALUES
(1, 'João Pedro Oliveira', '(21)99036-7137', '145.585.787-09', '25.325.255-8', '2020-12-14', '23040-550', 2355, 'bl 6 apto 506', '../fotos/63d96ac513eff.jpg', 'F', 'jpoliver@gmail.com', 'testando123', 'A'),
(2, 'Julie Quintanilha', '(21)99036-7137', '145.875.987-09', '25.625.805-6', '2013-01-01', '21775-430', 325, 'Casa 2', 'https://randomuser.me/api/portraits/women/30.jpg', 'F', 'juliequinta@gmail.com', 'testando123', 'A'),
(3, 'Romeu Andrade', '(21)98569-5659', '154.897.698-00', '4659', '1990-05-10', '23040550', 1, 'Não tem', '../fotos/63d9479681e50.jpg', 'M', 'romeoandra@yahoo.com.br', '$2y$10$vNqUt0jwYEVBTBxLvwHWT.r3xXRMH/zK6v5eNkQce0bzB2kE3ZnOS', 'A'),
(4, 'Cora Lima', '(21)98565-9466', '125.697.951-60', '169549', '2005-05-05', '21775430', 5, 'Casa 3', '../fotos/63d947e5e0c14.jpg', 'F', 'coral@gmail.com', '$2y$10$tpnTBWmC5RV.4xxqwD48.OKTQY.pRITdQ.8c.xEOfhk8VdQQTLmRO', 'A'),
(5, 'Carla Melo', '(21)98565-9466', '125.697.951-60', '169549', '2005-05-05', '21775430', 5, 'Casa 3', '../fotos/63d947e5e0c14.jpg', 'F', 'melocarla@gmail.com', '$2y$10$tpnTBWmC5RV.4xxqwD48.OKTQY.pRITdQ.8c.xEOfhk8VdQQTLmRO', 'A'),
(6, 'Josué Cardoso', '(21)98565-9466', '125.697.951-60', '169549', '2005-05-05', '21775430', 5, 'Casa 3', '../fotos/63d947e5e0c14.jpg', 'M', 'cjosue@gmail.com', '$2y$10$tpnTBWmC5RV.4xxqwD48.OKTQY.pRITdQ.8c.xEOfhk8VdQQTLmRO', 'A'),
(7, 'Judith Grimes', '(21)98565-9466', '125.697.951-60', '169549', '2005-05-05', '21775430', 5, 'Casa 3', '../fotos/63d947e5e0c14.jpg', 'F', 'dithjul@gmail.com', '$2y$10$tpnTBWmC5RV.4xxqwD48.OKTQY.pRITdQ.8c.xEOfhk8VdQQTLmRO', 'A'),
(8, 'Gabriel Souza Costa', '(21)98565-9466', '125.697.951-60', '169549', '2005-05-05', '21775430', 5, 'Casa 3', '../fotos/63d947e5e0c14.jpg', 'M', 'biel@gmail.com', '$2y$10$tpnTBWmC5RV.4xxqwD48.OKTQY.pRITdQ.8c.xEOfhk8VdQQTLmRO', 'A'),
(9, 'Francisco Martins', '(21)98565-9466', '125.697.951-60', '169549', '2005-05-05', '21775430', 5, 'Casa 3', '../fotos/63d947e5e0c14.jpg', 'M', 'fran@gmail.com', '$2y$10$tpnTBWmC5RV.4xxqwD48.OKTQY.pRITdQ.8c.xEOfhk8VdQQTLmRO', 'A'),
(10, 'Ana Luiza Possi', '(21)98565-9466', '125.697.951-60', '169549', '2005-05-05', '21775430', 5, 'Casa 3', '../fotos/63d947e5e0c14.jpg', 'F', 'lulu@gmail.com', '$2y$10$tpnTBWmC5RV.4xxqwD48.OKTQY.pRITdQ.8c.xEOfhk8VdQQTLmRO', 'A');


CREATE TABLE `atividade` (
  `IDATIVIDADE` int(11) NOT NULL,
  `NOMEATIVIDADE` varchar(60) NOT NULL,
  `DESCRICAO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `atividade` (`idatividade`, `nomeatividade`, `descricao`) VALUES
(1, 'Spinning', 'Spinning é um treino que usa muito das articulações das pernas e, por isso, é capaz de proporcionar '),
(2, 'Funcional', 'A ginástica funcional é um método de atividade física baseada em movimentos do cotidiano, como levan'),
(3, 'Pilates', 'O Pilates Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui consequuntur quo numquam corporis, omnis necessitatibus'),
(4, 'Jump', 'O Jump Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui consequuntur quo numquam corporis, omnis necessitatibus'),
(5, 'Hidroginástica', 'A hidro Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui consequuntur quo numquam corporis, omnis necessitatibus');

CREATE TABLE `aula` (
  `idaula` int(11) NOT NULL,
  `dataaula` date NOT NULL,
  `horario` varchar(30) NOT NULL,
  `idprofessor` int(11) NOT NULL,
  `idatividade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `aula` (`idaula`, `dataaula`, `horario`, `idprofessor`, `idatividade`) VALUES
(1, '2022-12-15', '10:00 às 11:00h', 1, 1),
(2, '2022-12-16', '14:00 às 15:00h', 2, 2);



CREATE TABLE `aulaaluno` (
  `idaulaaluno` int(11) NOT NULL,
  `idaula` int(11) NOT NULL,
  `matricula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `aulaaluno` (`idaulaaluno`, `idaula`, `matricula`) VALUES
(1, 1, 2),
(2, 2, 1);


CREATE TABLE `carrinho` (
  `codigoproduto` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` double NOT NULL,
  `quantcompra` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nomecategoria` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `categoria` (`idcategoria`, `nomecategoria`) VALUES
(1, 'Roupa'),
(2, 'Suplementos'),
(3, 'Acessórios'),
(4, 'Mochilas');



CREATE TABLE `funcionario` (
  `cpffuncionario` char(14) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `cep` char(9) NOT NULL,
  `numerocasa` smallint(6) NOT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `sexo` char(1) NOT NULL,
  `cargo` varchar(40) NOT NULL,
  `emailfuncionario` varchar(40) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` char(1) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `funcionario` (`cpffuncionario`, `nome`, `telefone`, `rg`, `cep`, `numerocasa`, `complemento`, `foto`, `sexo`, `cargo`, `emailfuncionario`, `senha`, `status`) VALUES
('005.522.985-44', 'André Castro Alves', '(21)97484-8566', '27.327.205-1', '21775-430', 55, 'Casa 9', 'https://randomuser.me/api/portraits/men/46.jpg', 'M', 'Professor', 'andrecalves@bodymovement.com', 'testando123', 'A'),
('154.587.927-44', 'Carlos José Rodrigues', '(21)98545-7899', '27.852.789-2', '21775-430', 25, 'Casa 3', 'https://randomuser.me/api/portraits/men/52.jpg', 'M', 'Professor', 'cjr@bodymovement.com', 'testando123', 'A'),
('171.875.952-55', 'Joana Souza', '(21)98564-7254', '22.238.202-0', '23040-550', 33, 'Apto 36', 'https://randomuser.me/api/portraits/women/26.jpg', 'F', 'Recepcionista', 'josouza@bodymovement.com', 'testando123', 'A'),
('171.875.952-55', 'Luan Augusto', '(21)98564-7254', '22.238.202-0', '23040-550', 33, 'Apto 36', 'https://randomuser.me/api/portraits/men/26.jpg', 'M', 'Professor', 'luaagu@bodymovement.com', 'testando123', 'A'),
('171.875.952-55', 'Asaph Santana', '(21)98564-7254', '22.238.202-0', '23040-550', 33, 'Apto 36', 'https://randomuser.me/api/portraits/men/32.jpg', 'M', 'Professor', 'asaph@bodymovement.com', 'testando123', 'A'),
('171.875.952-55', 'Ingrid Gomes', '(21)98564-7254', '22.238.202-0', '23040-550', 33, 'Apto 36', 'https://randomuser.me/api/portraits/women/52.jpg', 'F', 'Recepcionista', 'ingrid@bodymovement.com', 'testando123', 'A'),
('171.875.952-55', 'Matheus da Silva', '(21)98564-7254', '22.238.202-0', '23040-550', 33, 'Apto 36', 'https://randomuser.me/api/portraits/men/25.jpg', 'M', 'Professor', 'theus@bodymovement.com', 'testando123', 'A'),
('171.875.952-55', 'Raquel dos Santos', '(21)98564-7254', '22.238.202-0', '23040-550', 33, 'Apto 36', 'https://randomuser.me/api/portraits/women/26.jpg', 'F', 'Recepcionista', 'raquel@bodymovement.com', 'testando123', 'A'),
('171.875.952-55', 'Bruno Mattos', '(21)98564-7254', '22.238.202-0', '23040-550', 33, 'Apto 36', 'https://randomuser.me/api/portraits/men/27.jpg', 'M', 'Professor', 'brumttos@bodymovement.com', 'testando123', 'A'),
('171.875.952-55', 'Caio Oliveira', '(21)98564-7254', '22.238.202-0', '23040-550', 33, 'Apto 36', 'https://randomuser.me/api/portraits/men/18.jpg', 'M', 'Professor', 'caioo@bodymovement.com', 'testando123', 'A');




CREATE TABLE `habilitaprofessor` (
  `idhabilitacao` int(11) NOT NULL,
  `idatividade` int(11) NOT NULL,
  `idprofessor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `habilitaprofessor` (`idhabilitacao`, `idatividade`, `idprofessor`) VALUES
(1, 1, 1),
(2, 2, 2);



CREATE TABLE `produto` (
  `codigoproduto` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cor` varchar(30) NOT NULL,
  `valor` double NOT NULL,
  `tamanho` char(2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `produto` (`codigoproduto`, `nome`, `cor`, `valor`, `tamanho`, `quantidade`, `idcategoria`, `foto`) VALUES
(1, 'Conjunto Impact', 'ROSA', 270, 'M', 20, 1, ''),
(2, 'Macacão Scarlat', 'VINHO', 280, 'G', 15, 1, ''),
(3, 'Mochila Grey', 'Cinza', 89.99, 'Un', 20, 4, '../produtos/63d968a905c5c.jpg');



CREATE TABLE `professor` (
  `idprofessor` int(11) NOT NULL,
  `disponibilidade` varchar(40) NOT NULL,
  `cpffuncionario` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `professor` (`idprofessor`, `disponibilidade`, `cpffuncionario`) VALUES
(1, 'TERÇA À QUINTA PARTE DA MANHÃ', '154.587.927-44'),
(2, 'SEGUNDA À SÁBADO O DIA TODO', '171.875.952-55');



CREATE TABLE `venda` (
  `idvenda` int(11) NOT NULL,
  `cpffuncionario` char(14) NOT NULL,
  `codigoproduto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valorvenda` double NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `venda` (`idvenda`, `cpffuncionario`, `codigoproduto`, `quantidade`, `valorvenda`, `data`) VALUES
(1, '005.522.985-44', 2, 2, 540, '2022-12-12'),
(2, '005.522.985-44', 2, 2, 560, '2022-12-12');
