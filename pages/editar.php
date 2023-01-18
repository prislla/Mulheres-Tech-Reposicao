<?php

require_once '../includes/head.php';
require_once '../includes/menu.php';
?>

<?php

session_start(); //abrir sessão
ob_start(); //limpar buffer


$id = filter_input(INPUT_GET, "matricula", FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
    $_SESSION['msg'] = "Erro: Usuário não encontrado, tente novamente!";
    header("Location: relalunos.php");
    exit();
}








?>












































<h1> VAMOS EDITAR </H1>

<td>
                <?php echo "<a href='relalunos.php'>" ; ?>
                <input type="submit" class="btn btn-dark" name="voltar" value="Voltar">
            </td>