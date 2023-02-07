<?php
    session_start();
    ob_start();

    include_once '../includes/conexao.php';

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $codigoproduto = $dados["codigo"];

    if(!empty($dados["excluir"])){

        $sqlexcluir = "DELETE from carrinho where codigoproduto = $codigoproduto";
        $resulexcluir=$conn->prepare($sqlexcluir);
        $resulexcluir->execute();
        $_SESSION["quant"]-=1;
    }else{
        if(!isset($_SESSION['nome'])){
            $_SESSION["carrinho"] = true;
            echo "<script>
            alert('Faça login para finalizar sua compra!');
            parent.location = 'login.php';
            </script>";
        }
        else{
            //acessar pagamento;
            $data = date('y-m-d');
            $valor = $_SESSION['totalcompra'];
            //echo $valor;
            $matricula = $_SESSION["matricula"];
            //echo $matricula;

            $sqlvenda = "INSERT into venda(data,valor,matricula)values(:data,:valor,:matricula)";
            $salvarvenda= $conn->prepare($sqlvenda);
            $salvarvenda->bindParam(':data', $data, PDO::PARAM_STR);
            $salvarvenda->bindParam(':valor', $valor, PDO::PARAM_STR);
            $salvarvenda->bindParam(':matricula', $matricula, PDO::PARAM_STR);
            $salvarvenda->execute();

        }
    }



    ?>
