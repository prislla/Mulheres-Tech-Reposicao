<?php
  require_once 'head.php';
  require_once 'menu.php';

?>  



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
               <h1>Moda Fitness Body Movement</h1>
            </div>

        </div>
    </div>
    

    <div class="container-fluid imagens">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="img/roupa.jpg" alt="Conjunto impact">
                     <div class="card-body">
                        <h3 class="card-text">Conjunto Impact</h3>
                        <p class="card-text">R$ 270,00</p>
                        <!-- Botão para acionar modal -->
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#impact">
                            Comprar
                           </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="img/roupa2.jpg" alt="Macacao scarlat">
                     <div class="card-body">
                        <h3 class="card-text">Macacão Scarlat</h3>
                        <p class="card-text">R$ 280,00</p>
                        <!-- Botão para acionar modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#scarlat">
                             Comprar
                            </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="img/roupa3.jpg" alt="Conjunto florence">
                     <div class="card-body">
                     <h3 class="card-text">Conjunto Florence</h3>
                        <p class="card-text">R$ 350,00</p>
                          <!-- Botão para acionar modal -->
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#florence">
                            Comprar
                          </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                     <img class="card-img-top" src="img/roupa.jpg" alt="Conjunto april">
                     <div class="card-body">
                        <h3 class="card-text">Conjunto April</h3>
                        <p class="card-text">R$ 250,00</p>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#april">
                            Comprar
                          </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    



<!-- Modal -->
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

<div class="modal fade" id="scarlat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto Scarlat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="img/roupa2.jpg" alt="Macacao scarlat">
        Conjunto acompanha bolsa trainer.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="florence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto Florence</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="img/roupa3.jpg" alt="Conjunto florence">
        Conjunto acompanha fone, corda elástica.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="april" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conjunto April</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" src="img/roupa.jpg" alt="Conjunto april">
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
 





   