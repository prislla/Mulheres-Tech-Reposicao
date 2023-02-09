<?php

require_once '../includes/head.php';
require_once '../includes/menu.php';
include_once '../includes/conexao.php';

$totalcompra=0;
/*total compra é acumulador entao temos que criar a variavel antes - criei a variavel aqui*/

//echo $_SESSION["nome"];
//echo $_SESSION["matricula"];

$sql = "SELECT * from carrinho";
$resultado= $conn->prepare($sql);
$resultado->execute();

if(($resultado)and($resultado->RowCount()!=0)){

    ?>
   <form action="finalcarrinho.php" method="post"> 
    <table class="table">
    <thead>
     <tr>
        <th scope="col">Imagem</th>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Total</th>       

     </tr>
    </thead>
 <tbody>

<?php
    while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
       
        extract($linha);             
    
?>        
        <tr>
          <td scope="row"><img src="<?php echo $foto ?>"style=widht:100px;height:100px;></td>
          <td><?php echo $nome ?></td>
          <td><?php echo $valor ?></td>
          <td><?php echo $quantcompra ?></td>
          <td><?php echo $total = $quantcompra * $valor; $totalcompra += $total; ?></td>
          <!--total compra é acumulador entao temos que criar a variavel antes-->
         
        <td>
        <a href="../finalcarrinho.php"><button type="submit" class="btn btn-danger" name="excluir" value="<?php echo $codigoproduto; ?>">Excluir</button></a> 
<!--o while é repetição vai pegar todos os dados e ir colocando um botão de acordo com o produto, mudando para button e colocando a variável do codigo produto pra excluir exatamente o produto que estou clicando-->
          </td>
        </tr>        
         

<?php   
} ?>

<!--depois que fizer while é que mostro total da compra-->
<tr><td><?php echo "Total da compra - R$ ".$totalcompra; ?></td></tr>
</tbody>
</table>

<?php $_SESSION["totalcompra"]=$totalcompra; ?>

<input type="submit" class="btn btn-primary" name="finalizar" value="Finalizar Compra"> 
</form>

<?php
}
?>
