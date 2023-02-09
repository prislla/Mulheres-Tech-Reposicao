<?php
    session_start();
    ob_start();

    include_once '../includes/conexao.php';

    //se exiiste excluir, vai criar variavel para excluir   
    if(isset($_POST["excluir"])){

        $codigoproduto = $_POST["excluir"];

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
            $matricula = $_SESSION['matricula'];
            //var_dump ($matricula);

            

            $sqlvenda = "INSERT into venda(data,valor,matricula)values(:data,:valor,:matricula)";
            $salvarvenda= $conn->prepare($sqlvenda);
            $salvarvenda->bindParam(':data', $data, PDO::PARAM_STR);
            $salvarvenda->bindParam(':valor', $valor, PDO::PARAM_STR);
            $salvarvenda->bindParam(':matricula', $matricula, PDO::PARAM_STR);
            $salvarvenda->execute();

            //busca o codigo da ultima venda pra inserir com o select
            $venda = "Select LAST_INSERT_ID()";
            $resulvenda=$conn->prepare($venda);
            $resulvenda->execute();

            $linhavenda = $resulvenda->fetch(PDO::FETCH_ASSOC);

            
            //criou variavel para nao ter que escrever tudo dnv
            $idvenda = ($linhavenda["LAST_INSERT_ID()"]);

            //pegar tudo que está no carrinho pra salvar
            $busca ="select * from carrinho";
            $resulbusca=$conn->prepare($busca);
            $resulbusca->execute();

            if(($resulbusca) && ($resulbusca->rowCount()!=0)){
                while ($linha = $resulbusca->fetch(PDO::FETCH_ASSOC)){
                    extract($linha);

                    $sqlitem = "insert into item(codigoproduto,idvenda,quantidade,valor)values(:codigoproduto,:idvenda,:quantidade,:valor)";
                    $salvaritem= $conn->prepare($sqlitem);
                    $salvaritem->bindParam(':codigoproduto', $codigoproduto, PDO::PARAM_INT);
                    $salvaritem->bindParam(':idvenda', $idvenda, PDO::PARAM_INT);
                    $salvaritem->bindParam(':quantidade', $quantcompra, PDO::PARAM_INT);
                    $salvaritem->bindParam(':valor', $valor, PDO::PARAM_STR);
                    $salvaritem->execute();

                    $estoque = "UPDATE produto set quantidade=(quantidade - $quantcompra) 
                    where codigoproduto = $codigoproduto ";
                    $atualiza=$conn->prepare($estoque);
                    $atualiza->execute();

                }
            }
        }
        //limpar carrinho
        $sqllimpa = "delete from carrinho";
        $limpa= $conn->prepare($sqllimpa);
        $limpa->execute();
        $_SESSION["quant"] = 0; //limpa contagem do carrinho
            echo "<script>
            alert('Compra efetuada com sucesso!');
            parent.location = '/index.php';
            </script>";

      //  header("Location:/index.php");  
    }



    ?>
