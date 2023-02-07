<?php

require_once '../includes/head.php';
include_once '../includes/conexao.php';



if(isset($_SESSION['msg'])){
  echo $_SESSION['msg'];
  unset($_SESSION['msg']);
} 

//definir quantos registros por vez queremos exibir por página
$pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
$pag = (!empty($pagatual)) ? $pagatual : 1;

$limitereg = 6;

$inicio = ($limitereg * $pag) - $limitereg;

//se quiser buscar mais dados só incluir 
$busca = "SELECT p.codigoproduto,p.nome,p.valor,p.tamanho,p.cor,p.quantidade,p.foto,c.nomecategoria
FROM produto p, categoria c 
WHERE quantidade > 0 and c.idcategoria = p.idcategoria
LIMIT $inicio , $limitereg";

$resultado = $conn->prepare($busca); 
$resultado->execute();

if (($resultado) AND ($resultado->rowCount() != 0)){
   // echo "<h1>Relatório de produtos Body Movement</h1><br>";
    

?>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="../img/movement.png">
  <a class="navbar-brand" href="../index.php">Body Movement</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
    aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../pages/about.php">Nossa Academia</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Atividades
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../pages/spinning.php">Spinning</a>
          <a class="dropdown-item" href="../pages/jump.php">Jumpp</a>
          <a class="dropdown-item" href="../pages/funcional.php">Funcional</a>
          <a class="dropdown-item" href="../pages/hidro.php">Hidroginástica</a>
          <a class="dropdown-item" href="../pages/pilates.php">Pilates</a>


        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Loja
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../pages/roupas.php">Roupas</a>
          <a class="dropdown-item" href="../pages/suplementos.php">Suplementos</a>
          <a class="dropdown-item" href="../pages/acessorios.php">Acessórios</a>

        </div>
      </li>
    </ul>
    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
              <a href="../pages/login.php"> <button type="button" class="btn btn-dark">Área do Aluno</button></a>
              </li>

  </div>
</nav>
</body>

<hr>
<div class="alert alert-dark" role="alert">
<h1>Relatório de produtos da Body Movement</h1>
</div>
        <table class="table table-hover">
            <thead>
            <tr>
            <th scope="col">Imagem</th>
            <th scope="col">Nome</th>
            <th scope="col">Cor</th>
            <th scope="col">Preço</th>
            <th scope="col">Tamanho</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Categoria</th>
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
            <td scope="row"><img src="<?php echo $foto; ?>"style=widht:100px;height:100px;></td>
            <td><?php echo $nome ?></td>
            <td><?php echo $cor ?></td></td>
            <td><?php echo $valor ?></td></td>
            <td><?php echo $tamanho ?></td></td>
            <td><?php echo $quantidade ?></td></td>
            <td><?php echo $nomecategoria ?></td></td>
            <td>
                <?php echo "<a href='editprod.php?codigoproduto=$codigoproduto'>" ; ?>
                <input type="submit" class="btn btn-primary btn-sm" name="editar" value="Editar">
            </td>
            <!--<?php echo "<a href='excluirprod.php?codigoproduto=$codigoproduto'>" ; ?>
                 
                 <input type="submit" class="btn btn-danger" name="excluir" value="Excluir">-->
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
$qtregistro = "SELECT COUNT(codigoproduto) AS registros FROM produto";
$resultado = $conn->prepare($qtregistro);
$resultado->execute();
$resposta = $resultado->fetch(PDO::FETCH_ASSOC);

//Quantidade de página que serão usadas - quantidade de registros
//dividido pela quantidade de registro por página


//ceil - retorna um valor inteiro
$qnt_pagina = ceil($resposta['registros'] / $limitereg);

//Máximo de links que aparecem na página
$maximo = 2;

echo "<a href='relprodutos.php?page=1'>Primeira</a> ";


//variavel $pag que foi criada na linha 7 para receber página atual, ela diminui a anterior, inicia no número, se tiver 
//na 3 diminui 1 e volta pra página 2
//Chamar página anterior verificando a qntd de pág menos 1 e verifica se já não é a primeira pág
for ($anterior = $pag - $maximo; $anterior <= $pag - 1; $anterior++) {
    if ($anterior >= 1) {
        echo "<a href='relprodutos.php?page=$anterior'>$anterior</a> ";
    }
}

//página que aparece no url, ativa 
echo "$pag";

//chama próxima página, ou seja, verificando a página ativa e acrescentando mais 1
for ($proxima = $pag + 1; $proxima <= $pag + $maximo; $proxima++) {
    if ($proxima <= $qnt_pagina) {
        echo "<a href='relprodutos.php?page=$proxima'>$proxima</a> ";
    }
}

echo "<a href='relprodutos.php?page=$qnt_pagina'>Última</a> ";



?>

