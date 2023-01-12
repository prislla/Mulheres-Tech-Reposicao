<?php
require_once 'head.php';

session_start();
ob_start();

?>


<h1 class="text-center">Área do Aluno</h1>


<?php
        echo "Bem vindo(a) " . $_SESSION['nome'];
    ?>


<a href="logout.php"><button type="submit" class="btn btn-outline-dark">Sair</button>

































<?php
        require_once 'footer.php';

    ?>