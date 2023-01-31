<?php

require_once '../includes/head.php';
require_once '../includes/menu.php';
include_once '../includes/conexao.php';
session_start(); //abrir sessão
ob_start(); //limpar buffer


$id = filter_input(INPUT_GET, "matricula", FILTER_SANITIZE_NUMBER_INT);

//se não existir a variável id, mostra msg de erro
if (empty($id)) {
    $_SESSION['msg'] = "Erro: Aluno não encontrado, tente novamente!";
    header("Location: relalunos.php");
    exit();
}

//asterisco pega todos os dados

$sql = "SELECT * from aluno where matricula = $id LIMIT 1";
$resultado = $conn->prepare($sql); 
$resultado->execute();

if (($resultado) AND ($resultado->rowCount() != 0)){
    $linha = $resultado->fetch(PDO::FETCH_ASSOC);
    //var_dump($linha);
    extract($linha);

}
else{
    $_SESSION['msg'] = "Erro: Aluno não encontrado, tente novamente!";
    header("Location: relalunos.php");
}    



?>

<form method="post" action="controlealuno.php" enctype="multipart/form-data">
<div class="container-fluid texto">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Controle de alunos <strong>Body Movement</strong></h2>
        </div>
    </div>
</div>

    <div class="row"> <!--colocar css depois pra editar foto -->
        <div class="col-md-12 text-ce">
            <img src="<?php echo $FOTO; ?>" style=width:150px;height:150px;>
            <!--<input type="text" value="<?php echo $FOTO; ?>">-->

</div>

    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <div class="form=group">
                    <label for="Name">Matrícula</label>
                    <input type="text" class="form-control" id="nome" name="matricula" placeholder="Matrícula" value="<?php echo $MATRICULA;?>">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form=group">
                    <label for="Name">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" value="<?php echo $NOME;?>">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form=group">
                    <label for="inputEmail">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail" value="<?php echo $EMAILALUNO;?>">
                </div>
            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <p><input type="radio" name="sexo" checked value="F">  Feminino
                        <input type="radio" name="sexo" value="M"> Masculino
                    </p>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="CPF" onkeypress="$(this).mask('000.000.000-00');"
                                placeholder="000.000.000-00" value="<?php echo $CPF;?>">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="formGroupExampleInput2">RG</label>
                            <input type="text" class="form-control" id="rg" name="RG" placeholder="RG" value="<?php echo $RG;?>">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Data de Nascimento</label>
                            <input type="date" class="form-control" id="datadenascimento" name="dn" value="<?php echo $DATANASCIMENTO;?>">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" onkeypress="$(this).mask('(00)00000-0000')"
                                placeholder="(00) 00000-0000" value="<?php echo $TELEFONE;?>">
                        </div>
                    </div>


                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" id="cep" name="CEP"
                                        onblur="pesquisacep(this.value);" placeholder="00.000-000" value="<?php echo $CEP;?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputAddress">Endereço</label>
                                    <input type="text" class="form-control" id="rua" name="rua"
                                        placeholder="Rua/Estrada/Avenida">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="numero">Número</label>
                                    <input type="text" class="form-control" name="numero" value="<?php echo $NUMEROCASA;?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputAddress2">Complemento</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="complemento"
                                        placeholder="Apto, casa, etc." value="<?php echo $COMPLEMENTO;?>">
                                </div>
                            </div>



                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputCity">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro">
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputCity">Cidade</label>
                                            <input type="text" class="form-control" id="cidade" name="cidade">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="uf">Estado</label>
                                            <p>
                                                <input type="text" class="form-control" id="uf" name="uf">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>   
                            
                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="uf">Foto</label>
                                            <p>
                                                <input type="file" class="form-control" id="uf" name="foto">
                                        </div>
                                   </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        </div>
                        </div>
                        <input type="submit" class="btn btn-primary" name="btneditar" value ="Salvar">

</form>







































<hr>

<?php
      require_once '../includes/foot/footer.php';
    ?>




<!--<h1> VAMOS EDITAR </H1>

<td>
                <?php echo "<a href='relalunos.php'>" ; ?>
                <input type="submit" class="btn btn-dark" name="voltar" value="Voltar">
            </td> -->