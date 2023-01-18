<?php

require_once '../includes/head.php';
require_once '../includes/menu.php';
include_once '../includes/conexao.php';

//definir quantos registros por vez queremos exibir por página
$pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
$pag = (!empty($pagatual)) ? $pagatual : 1;

$limitereg = 3;

$inicio = ($limitereg * $pag) - $limitereg;

//se quiser buscar mais dados só incluir 
$busca = "SELECT matricula, CPF, nome, telefone, emailaluno FROM aluno LIMIT $inicio , $limitereg";

$resultado = $conn->prepare($busca); 
$resultado->execute();

if (($resultado) AND ($resultado->rowCount() != 0)){
   // echo "<h1>Relatório de Alunos Body Movement</h1><br>";
    

?>
<hr>
<div class="alert alert-dark" role="alert">
<h1>Relatório de Alunos Body Movement</h1>
</div>
        <table class="table table-hover">
            <thead>
            <tr>
            <th scope="col">Matrícula</th>
            <th scope="col">CPF</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
            <th scope="col"></th>

            </tr>
            </thead>
            <tbody>


<?php

        while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
        //var_dump($linha);

        //extract linha retorna os dados que estamos solicitando com variáveis, depois posso fazer com html no lugar do echo
        extract($linha);
?>

        <tr>
            <td scope="row"><?php echo $matricula ?></td>
            <td><?php echo $CPF ?></td>
            <td><?php echo $nome ?></td></td>
            <td><?php echo $telefone ?></td></td>
            <td><?php echo $emailaluno ?></td></td>
            <td>
                <?php echo "<a href='editar.php?matricula=$matricula'>" ; ?>
                <input type="submit" class="btn btn-primary btn-sm" name="editar" value="Editar">
            </td>
            <td>
                <?php echo "<a href='excluir.php?matricula=$matricula'>" ; ?>
                <input type="submit" class="btn btn-danger btn-sm" name="excluir" value="Excluir">
            </td>
        </tr>
              

<?php
    }
?>

        </tbody>
        </table>

<?php    

    }else{
    echo "Nenhum registro encontrado!";
}

//Contar os registros no BD
$qtregistro = "SELECT COUNT(matricula) AS registros FROM aluno";
$resultado = $conn->prepare($qtregistro);
$resultado->execute();
$resposta = $resultado->fetch(PDO::FETCH_ASSOC);

//Quantidade de página que serão usadas - quantidade de registros
//dividido pela quantidade de registro por página


//ceil - retorna um valor inteiro
$qnt_pagina = ceil($resposta['registros'] / $limitereg);

//Máximo de links que aparecem na página
$maximo = 2;

echo "<a href='relalunos.php?page=1'>Primeira</a> ";


//variavel $pag que foi criada na linha 7 para receber página atual, ela diminui a anterior, inicia no número, se tiver 
//na 3 diminui 1 e volta pra página 2
//Chamar página anterior verificando a qntd de pág menos 1 e verifica se já não é a primeira pág
for ($anterior = $pag - $maximo; $anterior <= $pag - 1; $anterior++) {
    if ($anterior >= 1) {
        echo "<a href='relalunos.php?page=$anterior'>$anterior</a> ";
    }
}

//página que aparece no url, ativa 
echo "$pag";

//chama próxima página, ou seja, verificando a página ativa e acrescentando mais 1
for ($proxima = $pag + 1; $proxima <= $pag + $maximo; $proxima++) {
    if ($proxima <= $qnt_pagina) {
        echo "<a href='relalunos.php?page=$proxima'>$proxima</a> ";
    }
}

echo "<a href='relalunos.php?page=$qnt_pagina'>Última</a> ";



?>

