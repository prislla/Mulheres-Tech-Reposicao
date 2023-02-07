<?php
require_once '../includes/head.php';
require_once '../includes/conexao.php';

$sql = "SELECT * FROM categoria";
$resultado=$conn->prepare($sql);
$resultado->execute();


?>


<form method="POST" action= "controleproduto.php" enctype="multipart/form-data">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Cadastro de produtos da <strong>Body Movement</strong></h2>
        </div>
    </div>



        <div class="row">
            <div class="col-md-8">
                <div class="form=group">
                    <label for="Name">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome do produto">
                </div>
            </div>
            


            <div class="col-md-2">
                <div class="form=group">
                    <label for="Name">Cor</label>
                    <input type="text" class="form-control" name="cor" placeholder="Cor do produto">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form=group">
                    <label for="Name">Tamanho</label>
                    <input type="text" class="form-control" name="tamanho" placeholder="Tamanho produto">
                </div>
            </div>
            

            
            <div class="col-md-3">
                <div class="form=group">
                    <label for="Name">Quantidade</label>
                    <input type="text" class="form-control" name="quantidade" placeholder="Quantidade do produto">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form=group">
                    <label for="valor">Preço</label>
                    <input type="text" class="form-control" name="valor" onchange="this.value = this.value.replace(/,/g,'.')" placeholder="Preço do produto">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form=group">
                    <label for="Name">Categoria</label>
                    <select class="form-control" name="categoria">

                        <?php 

                            if (($resultado) and ($resultado->rowCount() != 0)) {
                                while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {

                                    extract($linha);

    
                        ?>

                        <option value="<?php echo $idcategoria;?>"> <?php echo $nomecategoria; ?> </option>

                        <?php
                                }
                            }
                        ?>

                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form=group">
                    <label for="Name">Imagem</label>
                    <input type="file" class="form-control" name="foto">
                </div>
            </div>
                            
            <div class="form-group">
                            
                        <input type="submit" class="btn btn-primary" name="btncad" value ="Enviar">

</form>
</div>

</div>
          



<?php
      require_once '../includes/foot/footer.php';
    ?>






 