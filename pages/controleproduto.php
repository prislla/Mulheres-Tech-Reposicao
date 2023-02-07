<?php
    include_once '../includes/conexao.php';



    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

try{

    $dadosprod = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //var_dump($dadoscad);

    if(isset($_FILES['foto'])){
        $arquivo = ($_FILES['foto']);


        if($arquivo['error']){
            echo 'Erro ao carregar arquivo';
            header ("Location: formproduto.php");
        }

        $pasta = "../produtos/"; 
        $nomearquivo = $arquivo['name']; 
        $novonome = uniqid(); 
        $extensao = strtolower(pathinfo($nomearquivo, PATHINFO_EXTENSION)); 

       
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


if (!empty($dadosprod['btncad'])) {

   
    $vazio = false;

    $dadosprod = array_map('trim', $dadosprod);

    if (in_array("", $dadosprod)) {
        $vazio = true;

        echo  "<script>
            alert('Preencher todos os campos!!!');
            parent.location = 'formproduto.php'; 
            </script>";

    }


if (!$vazio) {



    $sql = "INSERT INTO produto(nome,cor,valor,tamanho,quantidade,idcategoria,foto) 
    values(:nome,:cor,:valor,:tamanho,:quantidade,:idcategoria,:foto)";



$salvar= $conn->prepare($sql);
$salvar->bindParam(':nome', $dadosprod['nome'], PDO::PARAM_STR);
$salvar->bindParam(':cor', $dadosprod['cor'], PDO::PARAM_STR);
$salvar->bindParam(':valor', $dadosprod['valor'], PDO::PARAM_STR);
$salvar->bindParam(':tamanho', $dadosprod['tamanho'], PDO::PARAM_STR);
$salvar->bindParam(':quantidade', $dadosprod['quantidade'], PDO::PARAM_STR);
$salvar->bindParam(':idcategoria', $dadosprod['categoria'], PDO::PARAM_STR);
$salvar->bindParam(':foto', $path, PDO::PARAM_STR);
$salvar->execute();

if ($salvar->rowCount()) {

    echo  "<script>
            alert('Produto cadastrado com sucesso!!!');
            parent.location = 'formproduto.php';
            </script>";

    unset($dadoscad);
} else {
    echo  "<script>
            alert('Produto não cadastrado!!!');
            parent.location = 'formproduto.php';
            </script>";
        }

}

}


if (!empty($dadosprod['btneditar'])) {

    var_dump($dadosprod);

    $dadosprod = array_map('trim', $dadosprod);
    

    $sql = "UPDATE produto set nome=:nome,cor=:cor,valor=:valor,tamanho=:tamanho,quantidade=:quantidade,idcategoria=:idcategoria,foto=:foto
     WHERE codigoproduto=:codigoproduto";



$salvar= $conn->prepare($sql);
$salvar->bindParam(':nome', $dadosprod['nome'], PDO::PARAM_STR);
$salvar->bindParam(':cor', $dadosprod['cor'], PDO::PARAM_STR);
$salvar->bindParam(':valor', $dadosprod['valor'], PDO::PARAM_STR);
$salvar->bindParam(':tamanho', $dadosprod['tamanho'], PDO::PARAM_STR);
$salvar->bindParam(':quantidade', $dadosprod['quantidade'], PDO::PARAM_STR);
$salvar->bindParam(':idcategoria', $dadosprod['categoria'], PDO::PARAM_STR);    
$salvar->bindParam(':foto', $path, PDO::PARAM_STR);
$salvar->bindParam(':codigoproduto', $dadosprod['codigo'], PDO::PARAM_INT);
$salvar->execute();

    if ($salvar->rowCount()) {

        echo  "<script>
                alert('Produto atualizado com sucesso!!!');
                parent.location = 'relprodutos.php';
                </script>";

        unset($dadoscad);
    } else {
        echo  "<script>
                alert('Produto não cadastrado!!!');
                parent.location = 'relprodutos.php';
                </script>";
    }





}

}
catch(PDOException $erro){
    echo $erro;

}

?>