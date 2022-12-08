<?php
  require_once 'head.php';
  require_once 'menu.php';

?>

<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
               <h1>Spinning - Conheça seus benefícios</h1>
            </div>

        </div>
    </div>
    

    <div class="container-fluid imagens">
        <div class="row">
            <div class="col-md-12">
                     <img src="img/spinning.jpg" class= "img-fluid">
                        <!-- Botão para acionar modal -->
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#impact">
                            Saiba mais
                           </button>
                    </div>
                </div>
            </div>


            <!-- Modal ATUALIZAR -->
<div class="modal fade" id="impact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto Impact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="img/roupa.jpg" alt="Conjunto Impact">
        Conjunto acompanha Squeeze, tênis e corda elástica.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</div>























<?php
        require_once 'footer.php';

    ?>