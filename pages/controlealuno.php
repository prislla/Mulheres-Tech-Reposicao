<?php
    include_once '../includes/conexao.php';



    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

try{
    $dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //var_dump($dadoscad);

if (!empty($dadoscad['btncad'])) {

    //variável para caso existir algum campo vazio, mostrar mensagem para preenchimento
    //parent.location redireciona para o formulário
    $vazio = false;

    $dadoscad = array_map('trim', $dadoscad);
    if (in_array("", $dadoscad)) {
        $vazio = true;
        echo  "<script>
            alert('Preencher todos os campos!!!');
            parent.location = 'formaluno.php'; 
            </script>";
   

    } else if(!filter_var($dadoscad['email'], FILTER_VALIDATE_EMAIL)) {
        $vazio = true;
        echo  "<script>
            alert('Informe um e-mail válido!!!');
            parent.location = 'formaluno.php';
            </script>";
    }

    if (!$vazio) {

    $senha = password_hash($dadoscad['senha'], PASSWORD_DEFAULT);    

    $sql = "INSERT INTO aluno(nome,telefone,CPF,RG,datanascimento,CEP,numerocasa,complemento,foto,sexo,emailaluno,senha) 
    values(:nome,:telefone,:cpf,:rg,:datanascimento,:cep,:numerocasa,:complemento,:foto,:sexo,:emailaluno,:senha)";



$salvar= $conn->prepare($sql);
$salvar->bindParam(':nome', $dadoscad['nome'],PDO::PARAM_STR);
$salvar->bindParam(':telefone', $dadoscad['telefone'],PDO::PARAM_STR);
$salvar->bindParam(':cpf', $dadoscad['CPF'],PDO::PARAM_STR);
$salvar->bindParam(':rg', $dadoscad['RG'],PDO::PARAM_STR);
$salvar->bindParam(':datanascimento', $dadoscad['dn'],PDO::PARAM_STR);
$salvar->bindParam(':cep', $dadoscad['CEP'],PDO::PARAM_STR);
$salvar->bindParam(':numerocasa', $dadoscad['numero'],PDO::PARAM_INT);
$salvar->bindParam(':complemento', $dadoscad['complemento'],PDO::PARAM_STR);
$salvar->bindParam(':foto', $dadoscad['foto'],PDO::PARAM_STR);
$salvar->bindParam(':sexo', $dadoscad['sexo'],PDO::PARAM_STR);
$salvar->bindParam(':emailaluno', $dadoscad['email'],PDO::PARAM_STR);
$salvar->bindParam(':senha', $senha,PDO::PARAM_STR);
$salvar->execute();

if ($salvar->rowCount()) {
    echo  "<script>
            alert('Usuário cadastrado com sucesso!!!');
            parent.location = 'formaluno.php';
            </script>";

    unset($dadoscad);
} else {
    echo  "<script>
            alert('Usuário não cadastrado!!!');
            parent.location = 'formaluno.php';
            </script>";
}

}

}


if (!empty($dadoscad['btneditar'])) {

    $dadoscad = array_map('trim', $dadoscad);
    
    var_dump($dadoscad);

    if(!filter_var($dadoscad['email'], FILTER_VALIDATE_EMAIL)) {
        $vazio = true;

        echo  "<script>
            alert('Informe um e-mail válido!!!');
            parent.location = 'formaluno.php';
            </script>";
    }

    $sql = "UPDATE aluno set NOME=:nome,TELEFONE=:telefone,CPF=:cpf,RG=:rg,DATANASCIMENTO=:datanascimento,CEP=:cep,NUMEROCASA=:numerocasa,
    COMPLEMENTO=:complemento,FOTO=:foto,SEXO=:sexo,EMAILALUNO=:emailaluno WHERE MATRICULA=:matricula";



    $salvar= $conn->prepare($sql);
    $salvar->bindParam(':nome', $dadoscad['nome'],PDO::PARAM_STR);
    $salvar->bindParam(':telefone', $dadoscad['telefone'],PDO::PARAM_STR);
    $salvar->bindParam(':cpf', $dadoscad['CPF'],PDO::PARAM_STR);
    $salvar->bindParam(':rg', $dadoscad['RG'],PDO::PARAM_STR);
    $salvar->bindParam(':datanascimento', $dadoscad['dn'],PDO::PARAM_STR);
    $salvar->bindParam(':cep', $dadoscad['CEP'],PDO::PARAM_STR);
    $salvar->bindParam(':numerocasa', $dadoscad['numero'],PDO::PARAM_INT);
    $salvar->bindParam(':complemento', $dadoscad['complemento'],PDO::PARAM_STR);
    $salvar->bindParam(':foto', $dadoscad['foto'],PDO::PARAM_STR);
    $salvar->bindParam(':sexo', $dadoscad['sexo'],PDO::PARAM_STR);
    $salvar->bindParam(':emailaluno', $dadoscad['email'],PDO::PARAM_STR);
    $salvar->bindParam(':matricula', $dadoscad['matricula'],PDO::PARAM_INT);
    $salvar->execute();

    if ($salvar->rowCount()) {
        echo  "<script>
                alert('Dados atualizados com sucesso!!!');
                parent.location = 'relalunos.php';
                </script>";

        unset($dadoscad);
    } else {
        echo  "<script>
                alert('Aluno não cadastrado!!!');
                parent.location = 'relalunos.php';
                </script>";
    }





}
}
catch(PDOException $erro){
    echo $erro;

}





?>