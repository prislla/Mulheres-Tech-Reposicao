
-- o asterisco pesquisa de todas as informações,retorna todas as informações da tabela aluno, todas as colunas com todos os registros

--          EXEMPLO: select * from aluno;


-- pesquisar nome e telefone de todos os alunos, coloco as colunas que quero mostrar

--          EXEMPLO: select nome, telefone from aluno;


-- pesquisar nome e telefone dos alunos que moram em apartamentos

--          EXEMPLO: select nome, telefone, from aluno 
--          WHERE
--          complemento like '%ap%';

-- pesquisar nome e preço de todos os produtos com estoque maior ou igual a 10 unidades

--          EXEMPLO: select nome, valor from produto where quantidade >=10;


-- pesquisar qual a soma do valor dos produtos em estoque (soma dos valores)

--                     EXEMPLO: select sum(valor) from produto;


-- verificar qual o valor total de mercadorias em estoque

--                     EXEMPLO: select sum(valor*quantidade) from produto;


                          -- Nomeando pesquisas/colunas

-- Dar nome a função executada, trocar select sum(valor*quantidade) para Total do Estoque Body Movement

--      EXEMPLO: select sum(valor*quantidade) as 'Total do Estoque Body Movement' from produto;

-- Pesquisar as informações das aulas executadas entre os dias 15/12/2022 a 16/12/2022, adicionar mais critérios, AND (e) posso usar OR (ou)

--      EXEMPLO: select * from aula WHERE
--          dataaula >= '2022-12-15' AND 
--          dataaula <= '2022-12-16';

--             EXEMPLO 2: select * from aula WHERE
--            dataaula BETWEEN '2022-12-15' AND '2022-12-16';


-- Pesquisar as informações das aulas EXEMPLOecutadas nos dias 15/12/2022 e 16/12/2022, in retorna EXEMPLOatamente o dia que queremos
            
--             EXEMPLO: select * from aula WHERE 
--          dataaula IN ('2022-12-15','2022-12-16');


-- OBS: like, in,between
-- quando não quero algo
-- EXEMPLO: não quero alunos com nome maria = not like, not between, not in


-- Pesquisar nome, telefone e cpf de todos os alunos que comecem com a letra P.
      
--             EXEMPLO: select nome, telefone, cpf from aluno
--          WHERE
--          nome like 'p%';

-- Pesquisar o nome e telefone dos alunos que o último sobrenome é Quintanilha

-- EXEMPLO: select nome, telefone from aluno
--     WHERE
--     nome like '%Quintanilha';


-- Alterar a tabela de alunos para inserir o sobrenome nos alunos de matrícula 1 e 2, set aponta pra coluna que quero modificar, tem que dizer 
-- qual é o identificador

-- EXEMPLO: update aluno
--     set nome = 'Maria Silva dos Santos'
--     where matricula = 1;

                                                 -- Aula dia 13/12/2022


-- Pesquisar a média de preço dos produtos no estoque, avg tira média

-- EXEMPLO: select avg(valor) from produto;

-- Pesquisar o produto com menor preço em estoque

--      EXEMPLO: select min(valor) from produto;

-- Pesquisar produto com maior valor em estoque

--      EXEMPLO: select max(valor) from produto;



                                                -- INNER JOIN

-- Trabalhando com duas tabelas, é melhor colocar na frente de onde estamos tirando a informação
--             inner join digo quem vou ligar
--             on de onde vou ligar

--             Pesquisar nome do aluno, telefone do aluno, rua que mora e nº de casa, bairro


-- EXEMPLO: 
-- select aluno.nome,aluno.telefone,endereco.rua,aluno.numerocasa,endereco.bairro
-- from aluno inner join endereco
-- on edereco.cep=aluno.cep;


-- Podemos dar apelidos para tabela para encurtar o que escrevo na pesquisa, posso dar qualquer nome 


-- EXEMPLO:
-- select a.nome,a.telefone,e.rua,a.numerocasa,e.bairro
-- from aluno a inner join endereco e
-- on e.cep=a.cep;


-- Pesquisar nome da atividade, data da aula e horário de todas as aulas do mês de dezembro 2022

-- EXEMPLO: select ati.nomeatividade,a.dataaula,a.horario
-- from atividade ati inner join aula a
-- on ati.idatividade = a.idatividade
 
-- dessa forma seleciona todas as aulas, primeiro ligo as tabelas 



-- para selecionar somente de dezembro, tem que colocar critério


-- EXEMPLO: 
-- select ati.nomeatividade,a.dataaula,a.horario
-- from atividade ati inner join aula a
-- on ati.idatividade = a.idatividade
-- and a.dataaula between '2022-12-01' and '2022-12-31';


-- ATIVIDADE DE FIXAÇÃO

-- Pesquisar nome e telefone de todos os professores

-- EXEMPLO: 
-- select f.nome,f.telefone
-- from funcionario f inner join professor p
-- on f.cpffuncionario = p.cpffuncionario;

-- -- Pesquisar o nome do funcionário e valor das vendas que realizou no mês de dezembro

-- EXEMPLO: 
-- select f.nome,v.valorvenda
-- from funcionario f inner join venda v
-- on f.cpffuncionario = v.cpffuncionario
-- and v.data between '2022-12-01' and '2022-12-31';

-- Pesquisar nome da atividade, nome dos alunos, data da aula e horário de todas as aulas do mês de dezembro

-- ex:
-- select ati.nomeatividade,a.dataaula,a.horario,alu.nome
-- from atividade ati inner join aula a
-- on ati.idatividade = a.idatividade
-- inner join aulaaluno aa
-- on a.idaula = aa.idaula
-- inner join aluno alu
-- on alu.matricula = aa.matricula
-- and a.dataaula between '2022-12-01' and '2022-12-31';
