<?php
    include_once '../includes/conexao.php';

try{
    $dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    var_dump($dadoscad);

if (!empty($dadoscad['btncad'])) {

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
$salvar->bindParam(':senha', $dadoscad['senha'],PDO::PARAM_STR);
$salvar->execute();

if ($salvar->rowCount()) {
    echo "Usuario cadastrado com sucesso!";
    unset($dadoscad);
} else {
    echo "Usuário não cadastrado!";
}



}

}
catch(PDOException $erro){
    echo $erro;
}





?>