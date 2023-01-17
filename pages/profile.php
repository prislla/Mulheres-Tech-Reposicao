<?php
include_once '../includes/conexao.php';
session_start();
ob_start();

?>

<?php
require_once '../includes/menu.php';
require_once '../includes/head.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>

<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="../styles.css">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="../profile.css">


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

<div class="perfil">
<img src="<?php echo $_SESSION['foto'] ?>">
</div>


<h6><span>Nome: <?php echo $_SESSION['nome'] ?></span></h6>
<h6><span>Data de Nascimento: <?php echo $_SESSION['datanascimento'] ?></span></h6>


<?php

        if(!isset($_SESSION['nome'])){
            $_SESSION['msg'] = "Erro: Necessário realizar o login para acessar a página!";
            header("Location: login.php");
        }
    ?>


<a href="../pages/logout.php"><button type="submit" class="btn btn-outline-dark">Sair</button>




















<?php
        require_once '../includes/foot/footer.php';

    ?>
 