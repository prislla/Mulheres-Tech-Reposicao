<?php

require_once '../includes/head.php';
require_once '../includes/menu.php';
include_once '../includes/conexao.php';
session_start(); //abrir sessão
ob_start(); //limpar buffer


$id = filter_input(INPUT_GET, "CODIGOPRODUTO", FILTER_SANITIZE_NUMBER_INT);

//se não existir a variável id, mostra msg de erro
if (empty($id)) {
    $_SESSION['msg'] = "Erro: Produto não encontrado, tente novamente!";
    header("Location: relprodutos.php");
    exit();
}

//asterisco pega todos os dados

$sql = "SELECT * from produto where CODIGOPRODUTO = $id LIMIT 1";
$resultado = $conn->prepare($sql); 
$resultado->execute();

if (($resultado) AND ($resultado->rowCount() != 0)){
    $linha = $resultado->fetch(PDO::FETCH_ASSOC);
    //var_dump($linha);
    extract($linha);

}
else{
    $_SESSION['msg'] = "Erro: Produto não encontrado, tente novamente!";
    header("Location: relprodutos.php");
}    



?>

<form method="post" action= "controleproduto.php" enctype="multipart/form-data">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Editar produtos da <strong>Body Movement</strong></h2>
        </div>
    </div>

    <div class="row"> <!--colocar css depois pra editar foto -->
        <div class="col-md-12">
            <img src="<?php echo $FOTO; ?>" style=width:150px;height:150px;>
            <!--<input type="text" value="<?php echo $FOTO; ?>">-->

</div>


        <div class="row">
            <div class="col-md-8">
                <div class="form=group">
                    <label for="Name">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome do produto" value="<?php echo $NOME;?>">
                </div>
            </div>
            


            <div class="col-md-2">
                <div class="form=group">
                    <label for="Name">Cor</label>
                    <input type="text" class="form-control" name="cor" placeholder="Cor do produto" value="<?php echo $COR;?>">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form=group">
                    <label for="Name">Tamanho</label>
                    <input type="text" class="form-control" name="tamanho" placeholder="Tamanho produto" value="<?php echo $TAMANHO;?>">
                </div>
            </div>
            

            
            <div class="col-md-3">
                <div class="form=group">
                    <label for="Name">Quantidade</label>
                    <input type="text" class="form-control" name="quantidade" placeholder="Quantidade do produto" value="<?php echo $QUANTIDADE;?>">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form=group">
                    <label for="valor">Preço</label>
                    <input type="text" class="form-control" name="valor" onchange="this.value = this.value.replace(/,/g,'.')" placeholder="Preço do produto" value="<?php echo $VALOR;?>">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form=group">
                    <label for="Name">Categoria</label>
                    <select class="form-control" name="categoria">

                        <?php 

            $categoria = $IDCATEGORIA;
            $sql = "SELECT * FROM categoria";
            $resultado = $conn->prepare($sql); 
            $resultado->execute();


                            if (($resultado) and ($resultado->rowCount() != 0)) {
                                while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {

                                    extract($linha);

    
                        ?>

                        <option value="<?php echo $IDCATEGORIA;?>" 
                        <?php if ($categoria == $IDCATEGORIA){
                            echo "selected";
                        }
                        
                        ?>
                        >  
                        
                        <?php echo $NOMECATEGORIA;?> 
                                    
                    
                    
                        </option>

                        <?php
                                }
                            }
                        ?>

                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form=group">
                    <label for="Name">Imagem</label>
                    <input type="file" class="form-control" name="foto">
                </div>
            </div>
                            
            <div class="form-group">
                            
                        <input type="submit" class="btn btn-primary" name="btncad" value ="Editar">

</form>
</div>

</div>







































<hr>

<?php
      require_once '../includes/foot/footer.php';
    ?>




<!--<h1> VAMOS EDITAR </H1>

<td>
                <?php echo "<a href='relalunos.php'>" ; ?>
                <input type="submit" class="btn btn-dark" name="voltar" value="Voltar">
            </td> -->