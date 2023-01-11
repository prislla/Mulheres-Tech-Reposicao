<?php
require_once 'head.php';
require_once 'menu.php';
include_once 'conexao.php';

$dadoslogin = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dadoslogin['btnlogin'])) {

 $buscalogin = "SELECT matricula, nome, emailaluno, senha
                        FROM aluno
                        WHERE emailaluno =:usuario
                        LIMIT 1";
           
 $resultado= $conn->prepare($buscalogin); 
 $resultado->bindParam(':usuario', $dadoslogin['usuario'],PDO::PARAM_STR);
 $resultado->execute();

 if(($resultado) AND ($resultado->rowCount()!= 0)){
    $resposta = $resultado->fetch(PDO::FETCH_ASSOC);
    var_dump($resposta);

     if(password_verify($dadoslogin['senha'], $resposta['senha'])){
        header("Location: adm.php");
     }
    else {
        echo "Usuário ou Senha Inválido!";
    }
}
    else {
        echo "Usuário ou Senha Inválido!";
    }

           
}


?>



<!DOCTYPE html>
<html>

<head>
    <title>Login</title>

    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">


</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Faça Login</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form id="login-form" class="form" action="" method="POST">

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="usuario" class="form-control" placeholder="login">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="senha" class="form-control" placeholder="senha">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Lembrar
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnlogin" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Não tem conta?<a href="formaluno.php">Cadastre-se aqui!</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Esqueceu sua senha?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>














<?php
        require_once 'footer.php';

    ?>