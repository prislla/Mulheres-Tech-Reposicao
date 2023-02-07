<?php
    include_once '../includes/conexao.php';



    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

try{
    $dadoscad = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //var_dump($dadoscad);

//verifica a foto para o salvamento
    if(isset($_FILES['foto'])){
        $arquivo = ($_FILES['foto']);


        if($arquivo['error']){
            echo 'Erro ao carregar arquivo';
            header ("Location: formaluno.php");
        }
// o erro ao carregar a foto era o caminho, como estou em pastas, precisei acrescentar os ../
        $pasta = "../fotos/"; //Salva nessa pasta
        $nomearquivo = $arquivo['name']; //pega o nome do arquivo da array que é criada automaticamente no envio do formulario
        $novonome = uniqid(); //nome unico, para não haver duplicidade e substituição 
        $extensao = strtolower(pathinfo($nomearquivo, PATHINFO_EXTENSION)); //Coloca o nome do arquivo com a sua extensão em minúsculo

        /*if($extensao!="jpg" && $extensao!="png" && $extensao != "webp"){
            echo "<script>
            alert('Essa extensão de arquivo não é aceita');
            </script>";
    
        } else {
            
            $salvaimg = move_uploaded_file($arquivo['tmp_name'], $pasta . $novonome . "." . $extensao );
    
            if($salvaimg){
                $path = $pasta.$novonome.".".$extensao;
            }
           
        }
    
    }*/
    if($extensao!="jpg" && $extensao!="png"){
        die("Tipo não aceito");
    }
    else{
        $salvaimg = move_uploaded_file($arquivo['tmp_name'], $pasta . $novonome . "." . $extensao);

         if($salvaimg){
             $path = $pasta . $novonome . "." . $extensao;
             echo "ok";
         }

    }


}


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

    $sql = "INSERT INTO aluno(nome,telefone,cpf,rg,datanascimento,cep,numerocasa,complemento,foto,sexo,emailaluno,senha) 
    values(:nome,:telefone,:cpf,:rg,:datanascimento,:cep,:numerocasa,:complemento,:foto,:sexo,:emailaluno,:senha)";



$salvar= $conn->prepare($sql);
$salvar->bindParam(':nome', $dadoscad['nome'],PDO::PARAM_STR);
$salvar->bindParam(':telefone', $dadoscad['telefone'],PDO::PARAM_STR);
$salvar->bindParam(':cpf', $dadoscad['cpf'],PDO::PARAM_STR);
$salvar->bindParam(':rg', $dadoscad['rg'],PDO::PARAM_STR);
$salvar->bindParam(':datanascimento', $dadoscad['dn'],PDO::PARAM_STR);
$salvar->bindParam(':cep', $dadoscad['cep'],PDO::PARAM_STR);
$salvar->bindParam(':numerocasa', $dadoscad['numero'],PDO::PARAM_INT);
$salvar->bindParam(':complemento', $dadoscad['complemento'],PDO::PARAM_STR);
$salvar->bindParam(':foto', $path , PDO::PARAM_STR);
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
    
    //var_dump($dadoscad);

    if(!filter_var($dadoscad['email'], FILTER_VALIDATE_EMAIL)) {
        $vazio = true;

        echo  "<script>
            alert('Informe um e-mail válido!!!');
            parent.location = 'formaluno.php';
            </script>";
    }

    $sql = "UPDATE aluno set nome=:nome,telefone=:telefone,cpf=:cpf,rg=:rg,datanascimento=:datanascimento,cep=:cep,numerocasa=:numerocasa,
    complemento=:complemento,foto=:foto,sexo=:sexo,emailaluno=:emailaluno WHERE matricula=:matricula";



    $salvar= $conn->prepare($sql);
    $salvar->bindParam(':nome', $dadoscad['nome'],PDO::PARAM_STR);
    $salvar->bindParam(':telefone', $dadoscad['telefone'],PDO::PARAM_STR);
    $salvar->bindParam(':cpf', $dadoscad['cpf'],PDO::PARAM_STR);
    $salvar->bindParam(':rg', $dadoscad['rg'],PDO::PARAM_STR);
    $salvar->bindParam(':datanascimento', $dadoscad['dn'],PDO::PARAM_STR);
    $salvar->bindParam(':cep', $dadoscad['cep'],PDO::PARAM_STR);
    $salvar->bindParam(':numerocasa', $dadoscad['numero'],PDO::PARAM_INT);
    $salvar->bindParam(':complemento', $dadoscad['complemento'],PDO::PARAM_STR);
    $salvar->bindParam(':foto', $path , PDO::PARAM_STR);
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