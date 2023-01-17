<?php
require_once '../includes/head.php';

session_start();
ob_start();

?>




<h1 class="text-center">Área do Aluno</h1>
<h2 class='text-center'>Olá, <?php echo $_SESSION['nome']?>! Seja bem 


<?php
        if($_SESSION['sexo'] == 'M'){
            echo 'vindo'; 
           }else{
              echo 'vinda';
             }     

             ?>
</h2>

<section id="sobre">
    <img src="<?php echo $_SESSION['foto'] ?>">          
<div>            
<ul>
<li>Nome: <?php echo $_SESSION['nome'] ?></li>
<li>Data de Nascimento: <?php echo $_SESSION['datanascimento'] ?></li>
</ul>
</div>
</section>


<?php

        if(!isset($_SESSION['nome'])){
            $_SESSION['msg'] = "Erro: Necessário realizar o login para acessar a página!";
            header("Location: login.php");
        }
    ?>


<a href="../pages/logout.php"><button type="submit" class="btn btn-outline-dark">Sair</button></a>






<?php
require '../includes/foot/footer.php'
?>









